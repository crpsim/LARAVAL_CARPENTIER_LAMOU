<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendArticlePublishedMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
    }



    // Si vous vous retrouvez ici monsieur, oui, j'ai essayé de faire quelque chose pour les autres fonctionnalités Laravel, notamment pour un système de queue pour le traitement asynchrone, mais je me suis perdu, j'ai laissé tombé...........













}
