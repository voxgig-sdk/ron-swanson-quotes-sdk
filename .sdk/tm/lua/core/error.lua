-- RonSwansonQuotes SDK error

local RonSwansonQuotesError = {}
RonSwansonQuotesError.__index = RonSwansonQuotesError


function RonSwansonQuotesError.new(code, msg, ctx)
  local self = setmetatable({}, RonSwansonQuotesError)
  self.is_sdk_error = true
  self.sdk = "RonSwansonQuotes"
  self.code = code or ""
  self.msg = msg or ""
  self.ctx = ctx
  self.result = nil
  self.spec = nil
  return self
end


function RonSwansonQuotesError:error()
  return self.msg
end


function RonSwansonQuotesError:__tostring()
  return self.msg
end


return RonSwansonQuotesError
