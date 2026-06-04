# RonSwansonQuotes SDK

Fetch random Ron Swanson quotes from Parks and Recreation, with search and batch endpoints

> TypeScript, Python, PHP, Golang, Ruby, Lua SDKs, a CLI, an interactive REPL, and an MCP server for AI agents — all generated from one OpenAPI spec by [@voxgig/sdkgen](https://github.com/voxgig/sdkgen).

## About Ron Swanson Quotes API

The Ron Swanson Quotes API is a small public service that returns quotes from the character Ron Swanson in NBC's *Parks and Recreation*. It is maintained (now archived) by [James Wright](https://github.com/jamesseanwright) and hosted on Heroku at `https://ron-swanson-quotes.herokuapp.com/v2`.

What you get from the API:

- A single random quote via `GET /v2/quotes`.
- A batch of random quotes via `GET /v2/quotes/<count>`.
- Case-insensitive substring search via `GET /v2/quotes/search/<term>`.
- The machine-readable OpenAPI 3 specification via `GET /v2/schema`.

Responses are plain JSON arrays of quote strings. No API key or authentication is required, and the service sends `Access-Control-Allow-Origin: *`, so it can be called directly from browsers. The upstream GitHub repository was archived on 19 January 2026 and is no longer accepting changes, though the hosted endpoint remains reachable.

## Try it

**TypeScript**
```bash
npm install ron-swanson-quotes
```

**Python**
```bash
pip install ron-swanson-quotes-sdk
```

**PHP**
```bash
composer require voxgig/ron-swanson-quotes-sdk
```

**Golang**
```bash
go get github.com/voxgig-sdk/ron-swanson-quotes-sdk/go
```

**Ruby**
```bash
gem install ron-swanson-quotes-sdk
```

**Lua**
```bash
luarocks install ron-swanson-quotes-sdk
```

## 30-second quickstart

### TypeScript

```ts
import { RonSwansonQuotesSDK } from 'ron-swanson-quotes'

const client = new RonSwansonQuotesSDK({})

// List all quotes
const quotes = await client.Quote().list()
```

See the [TypeScript README](ts/README.md) for the
full guide, or scroll down for the same example in other languages.

## What's in the box

| Surface | Use it for | Path |
| --- | --- | --- |
| **SDK** (TypeScript, Python, PHP, Golang, Ruby, Lua) | App integration | `ts/` `py/` `php/` `go/` `rb/` `lua/` |
| **CLI** | Scripts, CI, ops, one-off API calls | `go-cli/` |
| **MCP server** | AI agents (Claude, Cursor, Cline) | `go-mcp/` |

## Use it from an AI agent (MCP)

The generated MCP server exposes every operation in this SDK as an
[MCP](https://modelcontextprotocol.io) tool that Claude, Cursor or Cline
can call directly. Build and register it:

```bash
cd go-mcp && go build -o ron-swanson-quotes-mcp .
```

Then add it to your agent's MCP config (Claude Desktop, Cursor, etc.):

```json
{
  "mcpServers": {
    "ron-swanson-quotes": {
      "command": "/abs/path/to/ron-swanson-quotes-mcp"
    }
  }
}
```

## Entities

The API exposes 2 entities:

| Entity | Description | API path |
| --- | --- | --- |
| **Quote** | A single line of dialogue attributed to Ron Swanson, returned as a JSON string; available via `GET /v2/quotes`, `GET /v2/quotes/<count>`, and `GET /v2/quotes/search/<term>`. | `/quotes` |
| **Schema** | The OpenAPI 3 description of the API itself, served as JSON at `GET /v2/schema`. | `/schema` |

Each entity supports the following operations where available: **load**,
**list**, **create**, **update**, and **remove**.

## Quickstart in other languages

### Python

```python
from ronswansonquotes_sdk import RonSwansonQuotesSDK

client = RonSwansonQuotesSDK({})

# List all quotes
quotes, err = client.Quote(None).list(None, None)

# Load a specific quote
quote, err = client.Quote(None).load(
    {"id": "example_id"}, None
)
```

### PHP

```php
<?php
require_once 'ronswansonquotes_sdk.php';

$client = new RonSwansonQuotesSDK([]);

// List all quotes
[$quotes, $err] = $client->Quote(null)->list(null, null);

// Load a specific quote
[$quote, $err] = $client->Quote(null)->load(
    ["id" => "example_id"], null
);
```

### Golang

```go
import sdk "github.com/voxgig-sdk/ron-swanson-quotes-sdk/go"

client := sdk.NewRonSwansonQuotesSDK(map[string]any{})

// List all quotes
quotes, err := client.Quote(nil).List(nil, nil)
```

### Ruby

```ruby
require_relative "RonSwansonQuotes_sdk"

client = RonSwansonQuotesSDK.new({})

# List all quotes
quotes, err = client.Quote(nil).list(nil, nil)

# Load a specific quote
quote, err = client.Quote(nil).load(
  { "id" => "example_id" }, nil
)
```

### Lua

```lua
local sdk = require("ron-swanson-quotes_sdk")

local client = sdk.new({})

-- List all quotes
local quotes, err = client:Quote(nil):list(nil, nil)

-- Load a specific quote
local quote, err = client:Quote(nil):load(
  { id = "example_id" }, nil
)
```

## Unit testing in offline mode

Every SDK ships a test mode that swaps the HTTP transport for an
in-memory mock, so unit tests run offline.

### TypeScript

```ts
const client = RonSwansonQuotesSDK.test()
const result = await client.Quote().load({ id: 'test01' })
// result.ok === true, result.data contains mock data
```

### Python

```python
client = RonSwansonQuotesSDK.test(None, None)
result, err = client.Quote(None).load(
    {"id": "test01"}, None
)
```

### PHP

```php
$client = RonSwansonQuotesSDK::test(null, null);
[$result, $err] = $client->Quote(null)->load(
    ["id" => "test01"], null
);
```

### Golang

```go
client := sdk.TestSDK(nil, nil)
result, err := client.Quote(nil).Load(
    map[string]any{"id": "test01"}, nil,
)
```

### Ruby

```ruby
client = RonSwansonQuotesSDK.test(nil, nil)
result, err = client.Quote(nil).load(
  { "id" => "test01" }, nil
)
```

### Lua

```lua
local client = sdk.test(nil, nil)
local result, err = client:Quote(nil):load(
  { id = "test01" }, nil
)
```

## How it works

Every SDK call runs the same five-stage pipeline:

1. **Point** — resolve the API endpoint from the operation definition.
2. **Spec** — build the HTTP specification (URL, method, headers, body).
3. **Request** — send the HTTP request.
4. **Response** — receive and parse the response.
5. **Result** — extract the result data for the caller.

A feature hook fires at each stage (e.g. `PrePoint`, `PreSpec`,
`PreRequest`), so features can inspect or modify the pipeline without
forking the SDK.

### Features

| Feature | Purpose |
| --- | --- |
| **TestFeature** | In-memory mock transport for testing without a live server |

Pass custom features via the `extend` option at construction time.

### Direct and Prepare

For endpoints the entity model doesn't cover, use the low-level methods:

- **`direct(fetchargs)`** — build and send an HTTP request in one step.
- **`prepare(fetchargs)`** — build the request without sending it.

Both accept a map with `path`, `method`, `params`, `query`,
`headers`, and `body`. See the [How-to guides](#how-to-guides) below.

## How-to guides

### Make a direct API call

When the entity interface does not cover an endpoint, use `direct`:

**TypeScript:**
```ts
const result = await client.direct({
  path: '/api/resource/{id}',
  method: 'GET',
  params: { id: 'example' },
})
console.log(result.data)
```

**Python:**
```python
result, err = client.direct({
    "path": "/api/resource/{id}",
    "method": "GET",
    "params": {"id": "example"},
})
```

**PHP:**
```php
[$result, $err] = $client->direct([
    "path" => "/api/resource/{id}",
    "method" => "GET",
    "params" => ["id" => "example"],
]);
```

**Go:**
```go
result, err := client.Direct(map[string]any{
    "path":   "/api/resource/{id}",
    "method": "GET",
    "params": map[string]any{"id": "example"},
})
```

**Ruby:**
```ruby
result, err = client.direct({
  "path" => "/api/resource/{id}",
  "method" => "GET",
  "params" => { "id" => "example" },
})
```

**Lua:**
```lua
local result, err = client:direct({
  path = "/api/resource/{id}",
  method = "GET",
  params = { id = "example" },
})
```

## Per-language documentation

- [TypeScript](ts/README.md)
- [Python](py/README.md)
- [PHP](php/README.md)
- [Golang](go/README.md)
- [Ruby](rb/README.md)
- [Lua](lua/README.md)

## Using the Ron Swanson Quotes API

- Upstream: [https://github.com/jamesseanwright/ron-swanson-quotes](https://github.com/jamesseanwright/ron-swanson-quotes)

- Licensed under the [Apache License 2.0](https://www.apache.org/licenses/LICENSE-2.0).
- Quoted dialogue is from the NBC television series *Parks and Recreation*; the API author does not claim ownership of the underlying quotes.
- Attribution to the upstream project ([jamesseanwright/ron-swanson-quotes](https://github.com/jamesseanwright/ron-swanson-quotes)) is appreciated when redistributing.
- The upstream repository was archived in January 2026 and is now read-only.

---

Generated from the Ron Swanson Quotes API OpenAPI spec by [@voxgig/sdkgen](https://github.com/voxgig/sdkgen).
