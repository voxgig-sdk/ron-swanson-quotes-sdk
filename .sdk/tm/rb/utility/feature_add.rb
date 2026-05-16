# RonSwansonQuotes SDK utility: feature_add
module RonSwansonQuotesUtilities
  FeatureAdd = ->(ctx, f) {
    ctx.client.features << f
  }
end
