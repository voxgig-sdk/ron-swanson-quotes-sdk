# RonSwansonQuotes SDK exists test

require "minitest/autorun"
require_relative "../RonSwansonQuotes_sdk"

class ExistsTest < Minitest::Test
  def test_create_test_sdk
    testsdk = RonSwansonQuotesSDK.test(nil, nil)
    assert !testsdk.nil?
  end
end
