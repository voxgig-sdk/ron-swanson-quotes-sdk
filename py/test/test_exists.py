# ProjectName SDK exists test

import pytest
from ronswansonquotes_sdk import RonSwansonQuotesSDK


class TestExists:

    def test_should_create_test_sdk(self):
        testsdk = RonSwansonQuotesSDK.test(None, None)
        assert testsdk is not None
