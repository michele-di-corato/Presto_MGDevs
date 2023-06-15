<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class GoogleVisionSafeSearch implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $announce_image_id;
    /**
     * Create a new job instance.
     */
    public function __construct($announce_image_id)
    {
        $this->announce_image_id = $announce_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $i = Image::find($this->announce_image_id);
        if (!$i) {
            return;
        }

        $image = file_get_contents(storage_path('app/public/' . $i->path));

        // Impostazione variabile di ambiente di google_credential.json
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credential.json'));

        $imageAnnotator = new ImageAnnotatorClient();
        $response = $imageAnnotator->safeSearchDetection($image);
        $imageAnnotator->close();

        $safe = $response->getSafeSearchAnnotation();

        $adult = $safe->getAdult();
        $spoof = $safe->getSpoof();
        $medical = $safe->getMedical();
        $violence = $safe->getViolence();
        $racy = $safe->getRacy();

        $likelihoodName = [
            'text-secondary fas fa-circle', 'text-success fas fa-circle', 'text-success fas fa-circle', 'text-warning fas fa-circle', 'text-warning fas fa-circle', 'text-danger fas fa-circle'
        ];

        $i->adult = $likelihoodName[$adult];
        $i->spoof = $likelihoodName[$spoof];
        $i->medical = $likelihoodName[$medical];
        $i->violence = $likelihoodName[$violence];
        $i->racy = $likelihoodName[$racy];

        $i->save();
    }
}
