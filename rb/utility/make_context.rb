# RonSwansonQuotes SDK utility: make_context
require_relative '../core/context'
module RonSwansonQuotesUtilities
  MakeContext = ->(ctxmap, basectx) {
    RonSwansonQuotesContext.new(ctxmap, basectx)
  }
end
