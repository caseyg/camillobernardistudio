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
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
