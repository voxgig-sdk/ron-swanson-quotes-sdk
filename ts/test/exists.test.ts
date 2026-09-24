
import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { RonSwansonQuotesSDK } from '..'


describe('exists', async () => {

  test('test-mode', () => {
    const testsdk = RonSwansonQuotesSDK.test()
    equal(testsdk instanceof RonSwansonQuotesSDK, true,
      'RonSwansonQuotesSDK.test() must return a client synchronously')
  })

})
