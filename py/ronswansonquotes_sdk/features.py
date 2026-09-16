# RonSwansonQuotes SDK feature factory

from ronswansonquotes_sdk.feature.base_feature import RonSwansonQuotesBaseFeature
from ronswansonquotes_sdk.feature.ratelimit_feature import RonSwansonQuotesRatelimitFeature
from ronswansonquotes_sdk.feature.retry_feature import RonSwansonQuotesRetryFeature
from ronswansonquotes_sdk.feature.test_feature import RonSwansonQuotesTestFeature
from ronswansonquotes_sdk.feature.timeout_feature import RonSwansonQuotesTimeoutFeature


_FEATURES = {
    "base": lambda: RonSwansonQuotesBaseFeature(),
    "ratelimit": lambda: RonSwansonQuotesRatelimitFeature(),
    "retry": lambda: RonSwansonQuotesRetryFeature(),
    "test": lambda: RonSwansonQuotesTestFeature(),
    "timeout": lambda: RonSwansonQuotesTimeoutFeature(),
}


def _make_feature(name):
    factory = _FEATURES.get(name)
    if factory is not None:
        return factory()
    return _FEATURES["base"]()


# True when this SDK was generated with the named feature class - the
# constructor's tolerance for extend-carried features reads this (an
# active name with no generated class must not become a BaseFeature
# stray when an extend instance carries it).
def _has_feature(name):
    return name in _FEATURES
