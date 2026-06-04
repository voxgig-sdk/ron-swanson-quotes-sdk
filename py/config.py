# RonSwansonQuotes SDK configuration


def make_config():
    return {
        "main": {
            "name": "RonSwansonQuotes",
        },
        "feature": {
            "test": {
        "options": {
          "active": False,
        },
      },
        },
        "options": {
            "base": "https://ron-swanson-quotes.herokuapp.com/v2",
            "headers": {
        "content-type": "application/json",
      },
            "entity": {
                "quote": {},
                "schema": {},
            },
        },
        "entity": {
      "quote": {
        "fields": [],
        "name": "quote",
        "op": {
          "list": {
            "name": "list",
            "points": [
              {
                "method": "GET",
                "orig": "/quotes",
                "parts": [
                  "quotes",
                ],
                "transform": {
                  "req": "`reqdata`",
                  "res": "`body`",
                },
                "active": True,
                "args": {},
                "select": {},
                "index$": 0,
              },
            ],
            "input": "data",
            "key$": "list",
          },
          "load": {
            "name": "load",
            "points": [
              {
                "args": {
                  "params": [
                    {
                      "example": 2,
                      "kind": "param",
                      "name": "id",
                      "orig": "count",
                      "reqd": True,
                      "type": "`$INTEGER`",
                      "active": True,
                    },
                  ],
                },
                "method": "GET",
                "orig": "/quotes/{count}",
                "parts": [
                  "quotes",
                  "{id}",
                ],
                "rename": {
                  "param": {
                    "count": "id",
                  },
                },
                "select": {
                  "exist": [
                    "id",
                  ],
                },
                "transform": {
                  "req": "`reqdata`",
                  "res": "`body`",
                },
                "active": True,
                "index$": 0,
              },
              {
                "args": {
                  "params": [
                    {
                      "example": "hate",
                      "kind": "param",
                      "name": "term",
                      "orig": "term",
                      "reqd": True,
                      "type": "`$STRING`",
                      "active": True,
                    },
                  ],
                },
                "method": "GET",
                "orig": "/quotes/search/{term}",
                "parts": [
                  "quotes",
                  "search",
                  "{term}",
                ],
                "select": {
                  "exist": [
                    "term",
                  ],
                },
                "transform": {
                  "req": "`reqdata`",
                  "res": "`body`",
                },
                "active": True,
                "index$": 1,
              },
            ],
            "input": "data",
            "key$": "load",
          },
        },
        "relations": {
          "ancestors": [
            [
              "search",
            ],
          ],
        },
      },
      "schema": {
        "fields": [],
        "name": "schema",
        "op": {
          "load": {
            "name": "load",
            "points": [
              {
                "method": "GET",
                "orig": "/schema",
                "parts": [
                  "schema",
                ],
                "transform": {
                  "req": "`reqdata`",
                  "res": "`body`",
                },
                "active": True,
                "args": {},
                "select": {},
                "index$": 0,
              },
            ],
            "input": "data",
            "key$": "load",
          },
        },
        "relations": {
          "ancestors": [],
        },
      },
    },
    }
