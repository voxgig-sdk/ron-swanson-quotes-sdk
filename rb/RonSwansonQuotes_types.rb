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

# Request payload for Quote#list.
class QuoteListMatch
end

# Schema entity data model.
class Schema
end

# Request payload for Schema#load.
class SchemaLoadMatch
end

