# RonSwansonQuotes SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/test_feature'


module RonSwansonQuotesFeatures
  def self.make_feature(name)
    case name
    when "base"
      RonSwansonQuotesBaseFeature.new
    when "test"
      RonSwansonQuotesTestFeature.new
    else
      RonSwansonQuotesBaseFeature.new
    end
  end
end
