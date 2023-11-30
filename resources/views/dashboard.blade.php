<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-full">
    <header class="bg-white shadow">
        @include('header')
    </header>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            @include('top-choice')
            @include('turism-type')
        </div>
    </main>
</div>
