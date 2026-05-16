# RonSwansonQuotes SDK utility registration
require_relative '../core/utility_type'
require_relative 'clean'
require_relative 'done'
require_relative 'make_error'
require_relative 'feature_add'
require_relative 'feature_hook'
require_relative 'feature_init'
require_relative 'fetcher'
require_relative 'make_fetch_def'
require_relative 'make_context'
require_relative 'make_options'
require_relative 'make_request'
require_relative 'make_response'
require_relative 'make_result'
require_relative 'make_point'
require_relative 'make_spec'
require_relative 'make_url'
require_relative 'param'
require_relative 'prepare_auth'
require_relative 'prepare_body'
require_relative 'prepare_headers'
require_relative 'prepare_method'
require_relative 'prepare_params'
require_relative 'prepare_path'
require_relative 'prepare_query'
require_relative 'result_basic'
require_relative 'result_body'
require_relative 'result_headers'
require_relative 'transform_request'
require_relative 'transform_response'

RonSwansonQuotesUtility.registrar = ->(u) {
  u.clean = RonSwansonQuotesUtilities::Clean
  u.done = RonSwansonQuotesUtilities::Done
  u.make_error = RonSwansonQuotesUtilities::MakeError
  u.feature_add = RonSwansonQuotesUtilities::FeatureAdd
  u.feature_hook = RonSwansonQuotesUtilities::FeatureHook
  u.feature_init = RonSwansonQuotesUtilities::FeatureInit
  u.fetcher = RonSwansonQuotesUtilities::Fetcher
  u.make_fetch_def = RonSwansonQuotesUtilities::MakeFetchDef
  u.make_context = RonSwansonQuotesUtilities::MakeContext
  u.make_options = RonSwansonQuotesUtilities::MakeOptions
  u.make_request = RonSwansonQuotesUtilities::MakeRequest
  u.make_response = RonSwansonQuotesUtilities::MakeResponse
  u.make_result = RonSwansonQuotesUtilities::MakeResult
  u.make_point = RonSwansonQuotesUtilities::MakePoint
  u.make_spec = RonSwansonQuotesUtilities::MakeSpec
  u.make_url = RonSwansonQuotesUtilities::MakeUrl
  u.param = RonSwansonQuotesUtilities::Param
  u.prepare_auth = RonSwansonQuotesUtilities::PrepareAuth
  u.prepare_body = RonSwansonQuotesUtilities::PrepareBody
  u.prepare_headers = RonSwansonQuotesUtilities::PrepareHeaders
  u.prepare_method = RonSwansonQuotesUtilities::PrepareMethod
  u.prepare_params = RonSwansonQuotesUtilities::PrepareParams
  u.prepare_path = RonSwansonQuotesUtilities::PreparePath
  u.prepare_query = RonSwansonQuotesUtilities::PrepareQuery
  u.result_basic = RonSwansonQuotesUtilities::ResultBasic
  u.result_body = RonSwansonQuotesUtilities::ResultBody
  u.result_headers = RonSwansonQuotesUtilities::ResultHeaders
  u.transform_request = RonSwansonQuotesUtilities::TransformRequest
  u.transform_response = RonSwansonQuotesUtilities::TransformResponse
}
