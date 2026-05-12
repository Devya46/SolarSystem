<footer>
      <div class="container">
        <div class="footer-grid">
          <div
            class="footer-col scroll-animate"
            style="padding: 0px 43px 10px 4px"
          >
            <a
              href="index.html"
              class="footer-logo"
              style="text-decoration: none"
            >
              <div class="footer-logo-text">
                <div class="footer-logo-icon">
                  <img
                    src="images/logo-favicon.png"
                    alt="Solar Opex Energies Footer Logo"
                    onerror="this.src = 'https://placehold.co/52x48?text=S'"
                  />
                </div>
                <h3>Solar Opex Energies</h3>
                <p>Powering Future with Solar Energy</p>
              </div>
            </a>
            <p style="margin-top: 12px; font-size: 14px; line-height: 1.5">
              Leading Solar EPC solutions provider in India. Committed to clean
              energy and sustainable future.
            </p>
            <div class="social-links">
              <a href="#">
                <img src="images/facebook.png" alt="Facebook" />
              </a>

              <a href="#">
                <img src="images/instagram.png" alt="Instagram" />
              </a>

              <a href="#">
                <img src="images/linkedin.png" alt="LinkedIn" />
              </a>
            </div>
          </div>
          <div class="footer-col scroll-animate delay-1">
            <h4>Quick Links</h4>
            <ul>
              <li>
                <a href="index.html"
                  ><i class="fa fa-angle-right" aria-hidden="true"></i> Home</a
                >
              </li>
              <li>
                <a href="about.html"
                  ><i class="fa fa-angle-right" aria-hidden="true"></i> About
                  Us</a
                >
              </li>
              <li>
                <a href="portfolio.html"
                  ><i class="fa fa-angle-right" aria-hidden="true"></i>
                  Portfolio</a
                >
              </li>
              <li>
                <a href="contact.html"
                  ><i class="fa fa-angle-right" aria-hidden="true"></i>
                  Contact</a
                >
              </li>
            </ul>
          </div>
          <div class="footer-col scroll-animate delay-2">
            <h4>Our Services</h4>
            <ul>
              <li>
                <a href="residential-rooftop-solar.html"> Rooftop Solar</a>
              </li>
              <li>
                <a href="commercial-solar-solutions.html">Commercial Solar</a>
              </li>
              <li><a href="industrial-solar-epc.html">Industrial EPC</a></li>
              <li><a href="solar-water-pumps.html">Solar Pumps</a></li>
            </ul>
          </div>
          <div class="footer-col scroll-animate delay-3">
            <h4>Contact Info</h4>
            <ul class="contact-info">
              <li>
                <i class="fas fa-map-marker-alt"></i> A/14, Vyas Nagar Colony,
                Opposite Sony Mansion, Ashiana Nagar, Patna, Bihar – 800025
              </li>
              <li><i class="fas fa-phone"></i> +91 9199707448</li>
              <li>
                <i class="fas fa-envelope"></i>
                <a
                  href="https://mail.google.com/mail/?view=cm&fs=1&to=solaropex90@gmail.com"
                  target="_blank"
                  class="email-link"
                  >solaropex90@gmail.com</a
                >
              </li>
              <li>
                <i class="fas fa-envelope"></i>
                <a
                  href="https://mail.google.com/mail/?view=cm&fs=1&to=solaropex90@gmail.com"
                  target="_blank"
                  class="email-link"
                  >solaropexenergies@gmail.com</a
                >
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-newsletter scroll-animate">
          <h4>🌿 Join the Solar Revolution</h4>
          <form id="newsletterFormFooter" action="javascript:void(0);">
            <input
              type="email"
              id="newsletterEmail"
              placeholder="Your best email address"
              required
            />
            <button type="submit" id="newsletterBtn">Subscribe →</button>
          </form>
          <p style="font-size: 12px; margin-top: 12px; opacity: 0.7">
            No spam, only clean energy insights.
          </p>
        </div>
        <div class="footer-bottom scroll-animate">
          <p>
            &copy; 2026 Solaropex Energies. All rights reserved. | Designed by
            <a href="https://skilled-va.com" target="_blank">
              <img
                src="https://skilled-va.com/wp-content/uploads/2023/04/Untitled-design-75.png"
                alt="Skilled VA"
                style="
                  height: 15px;
                  vertical-align: middle;
                  margin-left: 5px;
                  background: white;
                "
              />
            </a>
          </p>
        </div>
      </div>
    </footer>

    <style>
        /* Footer */
      footer {
        background: var(--primary-dark);
        color: rgba(255, 255, 255, 0.8);
        padding: 60px 0 25px;
        width: 100%;
        overflow-x: hidden;
        margin-top: 80px;
      }
      .footer-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 40px;
        margin-bottom: 40px;
        overflow: hidden;
      }
      .footer-logo {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 18px;
        text-decoration: none;
      }
      .footer-logo-icon {
        width: 52px;
        height: 48px;
        border-radius: 10px;
        overflow: hidden;
        background: transparent;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .footer-logo-icon img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        /* transform: rotate(36deg); */

      }
      .footer-logo-text h3 {
        font-size: 22px;
        color: white;
        margin: 0;
        letter-spacing: -0.3px;
      }
      .footer-logo-text p {
        font-size: 12px;
    letter-spacing: 0.8px;
    color: var(--accent);
    font-weight: 600;
    text-transform: uppercase;
    margin-top: -4px;
      }
      .footer-col h4 {
        font-size: 17px;
        margin-bottom: 18px;
        color: white;
        position: relative;
        font-weight: 600;
      }
      .footer-col h4:after {
        content: "";
        position: absolute;
        bottom: -6px;
        left: 0;
        width: 30px;
        height: 2px;
        background: var(--accent);
      }
      .footer-col ul {
        list-style: none;
        padding: 0;
      }
      .footer-col ul li {
        margin-bottom: 10px;
        display: flex;
        align-items: flex-start;
        gap: 8px;
      }
      .footer-col ul li a {
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        transition: 0.25s;
        font-size: 14px;
      }
      .footer-col ul li a:hover {
        color: var(--accent);
        padding-left: 4px;
      }
      .email-link {
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        transition: 0.25s;
        font-size: 14px;
        word-break: break-all;
      }
      .email-link:hover {
        color: var(--accent);
        padding-left: 4px;
      }
      /* .social-links {
        display: flex;
        gap: 10px;
        margin-top: 18px;
      }
      .social-links a {
        width: 36px;
        height: 36px;
        background: rgba(255, 255, 255, 0.08);
        border-radius: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        transition: 0.25s;
      } */
      .social-links a:hover {
        /* background: var(--accent);
        color: var(--primary-dark); */
      }
      .social-links {
  display: flex;
  gap: 14px;
  align-items: center;
}

.social-links a img {
      margin-top: 15px;
    width: 30px;
    height: 30px;
    object-fit: contain;
    transition: 0.3s ease;
}

.social-links a:hover img {
  transform: translateY(-4px) scale(1.08);
}
      .footer-newsletter {
        text-align: center;
        padding: 30px 0;
        border-top: 1px solid rgba(255, 255, 255, 0.08);
        margin-bottom: 20px;
      }
      .footer-newsletter form {
        display: flex;
        justify-content: center;
        gap: 10px;
        max-width: 500px;
        margin: 15px auto 0;
        flex-wrap: wrap;
      }
      .footer-newsletter input {
        flex: 1;
        padding: 12px 20px;
        border-radius: 40px;
        border: none;
        background: rgba(255, 255, 255, 0.08);
        color: white;
        font-size: 14px;
      }
      .footer-newsletter button {
        background: var(--accent);
        color: var(--primary-dark);
        border: none;
        padding: 12px 26px;
        border-radius: 40px;
        font-weight: 600;
        cursor: pointer;
      }
      .footer-newsletter h4 {
    font-size: 1.6rem;
    font-weight: 500;
    letter-spacing: -0.3px;
    background: linear-gradient(135deg, #fff 20%, var(--accent) 80%);
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
    display: inline-block;
}
      .footer-bottom {
        text-align: center;
        padding-top: 20px;
        font-size: 13px;
        opacity: 0.7;
        border-top: 1px solid rgba(255, 255, 255, 0.08);
      }
      @media (max-width: 992px) {
        .footer-grid {
          grid-template-columns: repeat(2, 1fr);
          gap: 30px;
        }
      }
      @media (max-width: 768px) {
        .footer-grid {
          grid-template-columns: 1fr 1fr;
          gap: 20px;
        }
        .footer-col:nth-child(1) {
          grid-column: span 2;
        }
      }
.fa-angle-right{
  color: var(--accent);
}
    </style>