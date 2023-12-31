<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/resources/conversion_goal_campaign_config.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Resources;

class ConversionGoalCampaignConfig
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
        $pool->internalAddGeneratedFile(
            '
�
5google/ads/googleads/v9/enums/goal_config_level.protogoogle.ads.googleads.v9.enums"b
GoalConfigLevelEnum"K
GoalConfigLevel
UNSPECIFIED 
UNKNOWN
CUSTOMER
CAMPAIGNB�
!com.google.ads.googleads.v9.enumsBGoalConfigLevelProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
Ggoogle/ads/googleads/v9/resources/conversion_goal_campaign_config.proto!google.ads.googleads.v9.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
ConversionGoalCampaignConfigT
resource_name (	B=�A�A7
5googleads.googleapis.com/ConversionGoalCampaignConfig;
campaign (	B)�A�A#
!googleads.googleapis.com/Campaign]
goal_config_level (2B.google.ads.googleads.v9.enums.GoalConfigLevelEnum.GoalConfigLevelU
custom_conversion_goal (	B5�A�A/
-googleads.googleapis.com/CustomConversionGoal:�A|
5googleads.googleapis.com/ConversionGoalCampaignConfigCcustomers/{customer_id}/conversionGoalCampaignConfigs/{campaign_id}B�
%com.google.ads.googleads.v9.resourcesB!ConversionGoalCampaignConfigProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v9/resources;resources�GAA�!Google.Ads.GoogleAds.V9.Resources�!Google\\Ads\\GoogleAds\\V9\\Resources�%Google::Ads::GoogleAds::V9::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

