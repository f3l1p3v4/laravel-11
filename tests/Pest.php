<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(TestCase::class)->in('Feature');

// Opcionalmente, inclua o uso de RefreshDatabase se necessário
uses(RefreshDatabase::class)->in('Feature');