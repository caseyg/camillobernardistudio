<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files: true
  sortable: true
  fields:
    tags:
      label: Tags
      type: tags
      index: all
      lower: true
fields:
  internalFields:
    label: Internal Fields
    type: headline
  title:
    label: Project Title
    type:  text
  displayFields:
    label: Display Fields
    type: headline
  work:
    label: Name of Work/Publication (Headline 1)
    type:  text
    required: true
  client:
    label: Photographer/Client (Headline 2)
    type: text
  optional:
    label: Optional Information (Subhead)
    type: text
