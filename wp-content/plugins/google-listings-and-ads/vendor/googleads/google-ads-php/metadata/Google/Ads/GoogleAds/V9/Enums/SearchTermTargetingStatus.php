<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/enums/search_term_targeting_status.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Enums;

class SearchTermTargetingStatus
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
@google/ads/googleads/v9/enums/search_term_targeting_status.protogoogle.ads.googleads.v9.enums"�
SearchTermTargetingStatusEnum"p
SearchTermTargetingStatus
UNSPECIFIED 
UNKNOWN	
ADDED
EXCLUDED
ADDED_EXCLUDED
NONEB�
!com.google.ads.googleads.v9.enumsBSearchTermTargetingStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

