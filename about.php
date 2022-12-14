<style>
   :root {
      --orange: coral;
    }
    
    section {
      padding: 2rem 9%;
    }
    
    header {
      position: fixed;
      margin: 0 12px 0 12px;
    }
    
    .heading {
      text-align: center;
      font-size: 4rem;
      color: #333;
      padding: 1rem;
      margin: 2rem 0;
      background: rgba(209, 12, 12, 0.05);
    }
    
    .heading span {
      color: var(--orange);
    }
    
    p.lowercaseText {
      text-transform: lowercase;
    }
    
    .btnhome {
      display: inline-block;
      margin-top: 1rem;
      border-radius: 5rem;
      background: rgb(19, 18, 18);
      color: #fff;
      padding: 0.9vmax 3.5vmax;
      cursor: pointer;
      font-size: 1.7vmax;
    }
    
    .btnhome:hover {
      background: var(--orange);
    }
    


    
    .btnab{
      display: inline-block;
      margin-top: 1rem;
      border-radius: 3rem;
      background: rgb(19, 18, 18);
      color: #fff;
      padding: 0.9vmax 3.5vmax;
      cursor: pointer;
      font-size: 0.8vmax;
    }
    
    .btnab:hover {
      background: var(--orange);
    }
    .home {
      display: flex;
      align-items: center;
      min-height: 100vh;
      background-size: cover;
      background-position: center;
    }
    
    .home .content {
      max-width: 50rem;
    }
    
    .home .content h3 {
      font-size: 5vmax;
      color: #333;
    }
    
    .home .content span {
      font-size: 2.5vmax;
      color: var(--orange);
      padding: 1rem 0;
      line-height: 1.5;
    }
    
    .home .content p {
      font-size: 1.5rem;
      color: #999;
      padding: 1rem 0;
      line-height: 1.5;
    }
    
    .home .content h4 {
      font-size: 1vmax;
      color: rgb(19, 13, 13);
    }
    
    .about .row {
      display: flex;
      align-items: center;
      gap: 2rem;
      flex-wrap: wrap;
      padding: 2rem 0 3rem;
    }
    
    .about .row .video-container {
      flex: 1 1 40rem;
      position: relative;
    }
    
    .about .row .video-container video {
      width: 100%;
      border: 1.5rem solid #fff;
      border-radius: 0.5rem;
      box-shadow: 0 0.5rem 1rem rgba(255, 187, 187, 0.1);
      height: 100%;
      object-fit: cover;
    }
    
    .about .row .video-container h3 {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      font-size: 3rem;
      background: #fff;
      width: 100%;
      padding: 1rem 2rem;
      text-align: center;
      mix-blend-mode: screen;
    }
    
    .about .row .content {
      flex: 1 1 40rem;
    }
    
    .about .row .content h3 {
      font-size: 3rem;
      color: #333;
    }
    
    .about .row .content p {
      font-size: 1.5rem;
      color: #999;
      padding: 1rem 0 0.5rem;
      line-height: 1.5;
    }
    
    .icons-container {
      background: #eee;
      display: flex;

      gap: 1rem;
      padding-top: 3.5rem;
      padding-bottom: 3.5rem;
    }
    
    .icons-container .icons {
      background: #fff;
      border: 0.1rem solid rgba(0, 0, 0, 0.1);
      padding: 1.8rem;
      display: flex;
      align-items: center;
      flex: 1 1 18rem;
    }
    
    .icons-container .icons img {
      height: 5rem;
      margin-right: 1rem;
    }
    
    .icons-container .icons h3 {
      color: #333;
      padding-bottom: 0.5rem;
      font-size: 1.5rem;
    }
    
    .icons-container .icons span {
      color: #555;
      font-size: 1.3rem;
    }
    
    h2 {
      color: #000;
      font-size: 26px;
      font-weight: 300;
      text-align: center;
      text-transform: uppercase;
      position: relative;
      margin-top: 30px;
    }
    
    h2::after {
      content: '';
      width: 100px;
      position: absolute;
      margin: 0 auto;
      height: 4px;
      border-radius: 1px;
      background: wheat;
      left: 0;
      right: 0;
      bottom: -20px;
    }
</style>
<section class="about" id="about">
    <h1 class="heading">
      <span>Silly</span>
      video
    </h1>
    <div class="row">
      <div class="video-container">
        <video src="Image/about.mp4" loop autoplay muted> </video>
        <h3 class="d-none d-md-block"></h3>
      </div>
      <div class="content">
        <h3>Why is it special?</h3>
        <p></p>
        <p style="text-align:justify">What makes me happy looking back on the past is not how I changed, but who I changed myself with. I used to be a person who never cared about my appearance, But since you appeared, you have made me better in the eyes of others and more special in your eyes. I am so happy that I have had you by my side for the past 2 years. And I hope we will continue to grow and mature together in the future..</p>
  
         <a class="btn btnab" href="?page=content" > Watch </a>
      </div>
    </div>



    <h1 class="heading">
      <span>Silly</span>
      video
    </h1>
    <div class="row">
      <div class="video-container">
        <video src="Image/about.mp4" loop autoplay muted> </video>
        <h3 class="d-none d-md-block"></h3>
      </div>
      <div class="content">
        <h3>Why is it special?</h3>
        <p></p>
        <p style="text-align:justify">What makes me happy looking back on the past is not how I changed, but who I changed myself with. I used to be a person who never cared about my appearance, But since you appeared, you have made me better in the eyes of others and more special in your eyes. I am so happy that I have had you by my side for the past 2 years. And I hope we will continue to grow and mature together in the future..</p>
  
         <a class="btn btnab" href="?page=content" > Watch </a>
      </div>
    </div>


  </section>
  <!-- about section ends -->