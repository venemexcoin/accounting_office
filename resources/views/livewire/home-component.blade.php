
  @push('base_title')
    home
  @endpush

  @push('styles')
    <style>
    @media (max-width: 768px) {
        .reduct {
            display: none;
        }

    }
    </style>
  @endpush

  <div class="reduct">

    {{-- Tajetas superiores con información --}}
  @livewire('homecomponentes.tarjeta-component')

  {{-- video este componente es de recurso de video --}}
  @livewire('homecomponentes.video-modal-component')


<!-- Fact Start -->

<!-- Fact Start -->

    @livewire('homecomponentes.consulting-component')

<!-- About Start -->

    @livewire('homecomponentes.about-component')
<!-- About End -->


<!-- Service Start -->
    @livewire('homecomponentes.service-component')
<!-- Service End -->


<!-- Feature Start -->
    @livewire('homecomponentes.feature-component')
<!-- Feature End -->


<!-- Testimonial Start -->
  @livewire('homecomponentes.testimonial-component')
<!-- Testimonial End -->


<!-- Team Start -->
    @livewire('homecomponentes.team-start-component')
<!-- Team End -->


<!-- Contact Start -->
    @livewire('homecomponentes.contact-start-component')
<!-- Contact End -->


<!-- Blog Start -->
    @livewire('homecomponentes.blog-start-component')
<!-- Blog End -->

<!-- Footer Start -->
    @livewire('homecomponentes.footer-start-component')
<!-- Footer End -->
  </div>
