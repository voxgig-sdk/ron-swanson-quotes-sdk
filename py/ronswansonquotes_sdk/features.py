# RonSwansonQuotes SDK feature factory

from ronswansonquotes_sdk.feature.base_feature import RonSwansonQuotesBaseFeature
from ronswansonquotes_sdk.feature.test_feature import RonSwansonQuotesTestFeature


def _make_feature(name):
    features = {
        "base": lambda: RonSwansonQuotesBaseFeature(),
        "test": lambda: RonSwansonQuotesTestFeature(),
    }
    factory = features.get(name)
    if factory is not None:
        return factory()
    return features["base"]()
