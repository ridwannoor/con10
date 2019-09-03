<?php

namespace App\Services;

use Analytics;
use Spatie\Analytics\Period;

class Trending
{
   public function week($limit = 15)
   {
       return $this->getResults(7);
   }

   protected function getResults($days, $limit=15)
   {
       return Analytics::fetchMostVisitedPages(Period::days($days), $limit);
   }
}