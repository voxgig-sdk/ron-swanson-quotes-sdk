
import { Context } from './Context'


class RonSwansonQuotesError extends Error {

  isRonSwansonQuotesError = true

  sdk = 'RonSwansonQuotes'

  code: string
  ctx: Context

  constructor(code: string, msg: string, ctx: Context) {
    super(msg)
    this.code = code
    this.ctx = ctx
  }

}

export {
  RonSwansonQuotesError
}

