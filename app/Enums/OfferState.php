<?php

namespace App\Enums;

enum OfferState: string {
  case New = 'new';
  case Rejected = 'rejected';
  case Accepted = 'accepted';
  case CV_Sent = 'resume sent';
  case Canceled = 'canceled';
  case Incoming_Interview = 'incoming interview';
  case Passed_Interview = 'passed interview';
  case Failed_Interview = 'failed interview';
  case Archived = 'archived';

  public static function values(): array {
    return array_column(self::cases(), 'values');
  }
}

