<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/services/custom_conversion_goal_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Services;

class CustomConversionGoalService
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
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Agoogle/ads/googleads/v9/enums/custom_conversion_goal_status.protogoogle.ads.googleads.v9.enums"v
CustomConversionGoalStatusEnum"T
CustomConversionGoalStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
!com.google.ads.googleads.v9.enumsBCustomConversionGoalStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
9google/ads/googleads/v9/enums/response_content_type.protogoogle.ads.googleads.v9.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
!com.google.ads.googleads.v9.enumsBResponseContentTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
>google/ads/googleads/v9/resources/custom_conversion_goal.proto!google.ads.googleads.v9.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
CustomConversionGoalL
resource_name (	B5�A�A/
-googleads.googleapis.com/CustomConversionGoal
id (B�A
name (	J
conversion_actions (	B.�A+
)googleads.googleapis.com/ConversionActionh
status (2X.google.ads.googleads.v9.enums.CustomConversionGoalStatusEnum.CustomConversionGoalStatus:k�Ah
-googleads.googleapis.com/CustomConversionGoal7customers/{customer_id}/customConversionGoals/{goal_id}B�
%com.google.ads.googleads.v9.resourcesBCustomConversionGoalProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v9/resources;resources�GAA�!Google.Ads.GoogleAds.V9.Resources�!Google\\Ads\\GoogleAds\\V9\\Resources�%Google::Ads::GoogleAds::V9::Resourcesbproto3
�
Egoogle/ads/googleads/v9/services/custom_conversion_goal_service.proto google.ads.googleads.v9.services>google/ads/googleads/v9/resources/custom_conversion_goal.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.proto google/protobuf/field_mask.proto"�
"MutateCustomConversionGoalsRequest
customer_id (	B�AX

operations (2?.google.ads.googleads.v9.services.CustomConversionGoalOperationB�A
validate_only (i
response_content_type (2J.google.ads.googleads.v9.enums.ResponseContentTypeEnum.ResponseContentType"�
CustomConversionGoalOperation/
update_mask (2.google.protobuf.FieldMaskI
create (27.google.ads.googleads.v9.resources.CustomConversionGoalH I
update (27.google.ads.googleads.v9.resources.CustomConversionGoalH 
remove (	H B
	operation"z
#MutateCustomConversionGoalsResponseS
results (2B.google.ads.googleads.v9.services.MutateCustomConversionGoalResult"�
 MutateCustomConversionGoalResult
resource_name (	W
custom_conversion_goal (27.google.ads.googleads.v9.resources.CustomConversionGoal2�
CustomConversionGoalService�
MutateCustomConversionGoalsD.google.ads.googleads.v9.services.MutateCustomConversionGoalsRequestE.google.ads.googleads.v9.services.MutateCustomConversionGoalsResponse"^���?":/v9/customers/{customer_id=*}/customConversionGoals:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v9.servicesB CustomConversionGoalServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v9/services;services�GAA� Google.Ads.GoogleAds.V9.Services� Google\\Ads\\GoogleAds\\V9\\Services�$Google::Ads::GoogleAds::V9::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

