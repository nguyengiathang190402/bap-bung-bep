<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/services/webpage_view_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Services;

class WebpageViewService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
4google/ads/googleads/v9/resources/webpage_view.proto!google.ads.googleads.v9.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
WebpageViewC
resource_name (	B,�A�A&
$googleads.googleapis.com/WebpageView:l�Ai
$googleads.googleapis.com/WebpageViewAcustomers/{customer_id}/webpageViews/{ad_group_id}~{criterion_id}B�
%com.google.ads.googleads.v9.resourcesBWebpageViewProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v9/resources;resources�GAA�!Google.Ads.GoogleAds.V9.Resources�!Google\\Ads\\GoogleAds\\V9\\Resources�%Google::Ads::GoogleAds::V9::Resourcesbproto3
�
;google/ads/googleads/v9/services/webpage_view_service.proto google.ads.googleads.v9.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"\\
GetWebpageViewRequestC
resource_name (	B,�A�A&
$googleads.googleapis.com/WebpageView2�
WebpageViewService�
GetWebpageView7.google.ads.googleads.v9.services.GetWebpageViewRequest..google.ads.googleads.v9.resources.WebpageView"F���0./v9/{resource_name=customers/*/webpageViews/*}�Aresource_nameE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v9.servicesBWebpageViewServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v9/services;services�GAA� Google.Ads.GoogleAds.V9.Services� Google\\Ads\\GoogleAds\\V9\\Services�$Google::Ads::GoogleAds::V9::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

