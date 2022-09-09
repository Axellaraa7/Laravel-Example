@props(['type'])

@php
  switch($type){
    case 'danger':
      $classes = 'alertDanger';
      break;
    case 'success':
      $classes = 'alertSuccess';
      break;
    case 'info':
      $classes = 'alertInfo';
      break;
    default:
      $classes = 'alertInfo';
      break;
  }
@endphp
<article class="alert {{$classes}}">
  {{$slot}}
</article>