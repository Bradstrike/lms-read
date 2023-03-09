<div>
  <a class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-5"  href="{{ route('app.pricing.credit-card', ['egitim' => $lesson->id]) }}">
    <span class="svg-icon svg-icon-4x me-4">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M22 7H2V11H22V7Z" fill="currentColor"/>
        <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="currentColor"/>
      </svg>
    </span>
    <span class="d-block fw-semibold text-start">
      <span class="text-dark fw-bold d-block fs-3">Kredi Kartı</span>
      <span class="text-muted fw-semibold fs-6">
        Eğitime hemen başlamak için <strong>kredi kartıyla</strong> ödeme yapabilirsiniz.
      </span>
    </span>
  </a>
  <a class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" href="{{ route('app.pricing.bank-transfer', ['egitim' => $lesson->id]) }}"> 
    <span class="svg-icon svg-icon-4x me-4">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.3" d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z" fill="currentColor"/>
        <path opacity="0.3" d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z" fill="currentColor"/>
        <path d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z" fill="currentColor"/>
      </svg>
    </span>
    <span class="d-block fw-semibold text-start">
      <span class="text-dark fw-bold d-block fs-3">Banka Havalesi</span>
      <span class="text-muted fw-semibold fs-6">Ödemeniz mesai saatleri içerisinde onaylanır. Onaylandığında eposta ve sms yoluya bilgilendirileceksiniz.</span>
    </span>
  </a>
</div>
