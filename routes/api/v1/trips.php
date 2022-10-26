<?php

use App\Http\Controllers\TripController;
use Illuminate\Support\Facades\Route;


//routes for trips

Route::get('/trips', [TripController::class, 'index']);

Route::get('/trips/{trip}', [TripController::class, 'show']);

Route::post('/trips', [TripController::class, 'store']);

Route::put('/trips/{trip}', [TripController::class, 'update']);

Route::delete('/trips/{trip}', [TripController::class, 'destroy']);

Route::get('/trips/{trip}/users', [TripController::class, 'users']);

Route::get('/trips/{trip}/itineraries', [TripController::class, 'index']);

Route::get('/trips/{trip}/collaborators', [TripController::class, 'collaborators']);

Route::post('/trips/{trip}/collaborators', [TripController::class, 'addCollaborator']);

Route::delete('/trips/{trip}/collaborators/{collaborator}', [TripController::class, 'removeCollaborator']);

Route::get('/trips/{trip}/collaborators/{collaborator}', [TripController::class, 'showCollaborator']);

Route::get('/trips/{trip}/collaborators/{collaborator}/itineraries', [TripController::class, 'collaboratorItineraries']);

Route::get('/trips/{trip}/collaborators/{collaborator}/itineraries/{itinerary}', [TripController::class, 'showCollaboratorItinerary']);

Route::put('/trips/{trip}/collaborators/{collaborator}/itineraries/{itinerary}', [TripController::class, 'updateCollaboratorItinerary']);

Route::delete('/trips/{trip}/collaborators/{collaborator}/itineraries/{itinerary}', [TripController::class, 'destroyCollaboratorItinerary']);