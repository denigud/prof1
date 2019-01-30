<?php
use App\Models\Meters\Meter;
return [
    'id' => function(Meter $meter) {
        return $meter->id;
    },
    'title' => function(Meter $meter) {
        return $meter->title;
    },
    'site' => function(Meter $meter) {
        return $meter->site;
    },
    'image' => function(Meter $meter) {
        return $meter->image;
    },
    'cardStyle' => function(Meter $meter) {
        return $meter->cardStyle;
    }
];
