package voxgigronswansonquotessdk

import (
	"github.com/voxgig-sdk/ron-swanson-quotes-sdk/go/core"
	"github.com/voxgig-sdk/ron-swanson-quotes-sdk/go/entity"
	"github.com/voxgig-sdk/ron-swanson-quotes-sdk/go/feature"
	_ "github.com/voxgig-sdk/ron-swanson-quotes-sdk/go/utility"
)

// Type aliases preserve external API.
type RonSwansonQuotesSDK = core.RonSwansonQuotesSDK
type Context = core.Context
type Utility = core.Utility
type Feature = core.Feature
type Entity = core.Entity
type RonSwansonQuotesEntity = core.RonSwansonQuotesEntity
type FetcherFunc = core.FetcherFunc
type Spec = core.Spec
type Result = core.Result
type Response = core.Response
type Operation = core.Operation
type Control = core.Control
type RonSwansonQuotesError = core.RonSwansonQuotesError

// BaseFeature from feature package.
type BaseFeature = feature.BaseFeature

func init() {
	core.NewBaseFeatureFunc = func() core.Feature {
		return feature.NewBaseFeature()
	}
	core.NewTestFeatureFunc = func() core.Feature {
		return feature.NewTestFeature()
	}
	core.NewQuoteEntityFunc = func(client *core.RonSwansonQuotesSDK, entopts map[string]any) core.RonSwansonQuotesEntity {
		return entity.NewQuoteEntity(client, entopts)
	}
	core.NewSchemaEntityFunc = func(client *core.RonSwansonQuotesSDK, entopts map[string]any) core.RonSwansonQuotesEntity {
		return entity.NewSchemaEntity(client, entopts)
	}
}

// Constructor re-exports.
var NewRonSwansonQuotesSDK = core.NewRonSwansonQuotesSDK
var TestSDK = core.TestSDK
var NewContext = core.NewContext
var NewSpec = core.NewSpec
var NewResult = core.NewResult
var NewResponse = core.NewResponse
var NewOperation = core.NewOperation
var MakeConfig = core.MakeConfig
var NewBaseFeature = feature.NewBaseFeature
var NewTestFeature = feature.NewTestFeature
