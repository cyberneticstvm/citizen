<?php

use App\Models\Survey;

function surveys()
{
    return Survey::where('status', 1)->get();
}
