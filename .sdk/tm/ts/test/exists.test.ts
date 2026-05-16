
import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { RonSwansonQuotesSDK } from '..'


describe('exists', async () => {

  test('test-mode', async () => {
    const testsdk = await RonSwansonQuotesSDK.test()
    equal(null !== testsdk, true)
  })

})
