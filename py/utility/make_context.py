# RonSwansonQuotes SDK utility: make_context

from core.context import RonSwansonQuotesContext


def make_context_util(ctxmap, basectx):
    return RonSwansonQuotesContext(ctxmap, basectx)
