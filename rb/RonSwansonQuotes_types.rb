# frozen_string_literal: true

# Typed models for the RonSwansonQuotes SDK.
#
# GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
# params (op.<name>.points[].args.params[]). Member types come from the
# canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
# @voxgig/apidef VALID_CANON). Ruby types are unenforced; these YARD
# annotations document the shapes. Do not edit by hand.

# Quote entity data model.
class Quote
end

# Request payload for Quote#load.
#
# @!attribute [rw] id
#   @return [Integer]
#
# @!attribute [rw] term
#   @return [String]
QuoteLoadMatch = Struct.new(
  :id,
  :term,
  keyword_init: true
)

# Match filter for Quote#list (any subset of Quote fields).
class QuoteListMatch
end

# Schema entity data model.
class Schema
end

# Match filter for Schema#load (any subset of Schema fields).
class SchemaLoadMatch
end

