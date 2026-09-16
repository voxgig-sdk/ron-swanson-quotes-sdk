# RonSwansonQuotes SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/ratelimit_feature'
require_relative 'feature/retry_feature'
require_relative 'feature/test_feature'
require_relative 'feature/timeout_feature'


module RonSwansonQuotesFeatures
  def self.make_feature(name)
    case name
    when "base"
      RonSwansonQuotesBaseFeature.new
    when "ratelimit"
      RonSwansonQuotesRatelimitFeature.new
    when "retry"
      RonSwansonQuotesRetryFeature.new
    when "test"
      RonSwansonQuotesTestFeature.new
    when "timeout"
      RonSwansonQuotesTimeoutFeature.new
    else
      RonSwansonQuotesBaseFeature.new
    end
  end
end
