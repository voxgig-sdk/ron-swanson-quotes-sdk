-- RonSwansonQuotes SDK exists test

local sdk = require("ron-swanson-quotes_sdk")

describe("RonSwansonQuotesSDK", function()
  it("should create test SDK", function()
    local testsdk = sdk.test(nil, nil)
    assert.is_not_nil(testsdk)
  end)
end)
