# RonSwansonQuotes SDK utility: make_context

from projectname_sdk.core.context import RonSwansonQuotesContext


def make_context_util(ctxmap, basectx):
    return RonSwansonQuotesContext(ctxmap, basectx)
