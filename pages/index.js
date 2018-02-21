import Head from "next/head";
import HorizontalRule from "../components/HorizontalRule";
export default () => (
  <div className="root">
    <Head>
      <title>Eastern Iowa Miles For Myeloma</title>
      <meta
        name="viewport"
        content="initial-scale=1.0, width=device-width"
        key="viewport"
      />
      <meta httpEquiv="Content-Type" content="text/html; charset=utf-8" />

      <meta
        name="description"
        content="The annual Eastern Iowa Miles for Myeloma Walk Run"
      />

      <meta name="twitter:card" content="summary" />
      <meta name="twitter:site" content="@milesformyeloma" />
      <meta name="twitter:title" content="Eastern Iowa Miles for Myeloma" />
      <meta
        name="twitter:description"
        content="The annual Eastern Iowa Miles for Myeloma Walk Run"
      />
      <meta name="twitter:creator" content="@milesformyeloma" />

      <meta name="twitter:image" content="https://pbs.twimg.com/profile_images/435250169114656768/GOb8PDEE_400x400.jpeg" />

      <meta property="og:title" content="Eastern Iowa Miles for Myeloma" />
      <meta property="og:type" content="article" />
      <meta property="og:url" content="http://www.milesformm.com/" />
      <meta property="og:image" content="https://pbs.twimg.com/profile_images/435250169114656768/GOb8PDEE_400x400.jpeg" />
      <meta property="og:description" content="The annual Eastern Iowa Miles for Myeloma Walk Run" />
      <meta property="og:site_name" content="Eastern Iowa Miles for Myeloma" />
    </Head>
    <style global jsx>{`
      * {
        box-sizing: border-box;
      }
    `}</style>
    <style jsx>{`
      .root {
        max-width: 760px;
        margin: 0 auto 100px;
      }
      a {
        color: rgb(0, 0, 238);
      }
      h3 {
        color: #000080;
        font-family: Arial, sans-serif;
        line-height: 1.4;
      }
      p {
        color: #000080;
        font-family: Arial, sans-serif;
        line-height: 1.4;
      }
      article {
        margin-bottom: 50px;
        margin-top: 20px;
      }
      .logo-image {
        max-width: 98vw;
      }
    `}</style>
    <img
      className="logo-image"
      src="/static/mileslogo.jpg"
      alt="Eastern Iowa Miles for Myeloma"
    />
    <article>
      <h3>The EIMM Walk is Back!</h3>

      <p>
        After a one year hiatus, the Eastern Iowa Miles for Myeloma Walk/Run
        will return <strong>Sunday, October 14, 2018</strong>. Put it on your
        calendar! To register, <a href="https://independent.themmrf.org/EIMM">click here</a>.
      </p>

      <p>
        Annie Blaser will relight the torch and lead the organization of next
        year's event. Keep your eyes open for more news early in the new
        year!
      </p>

      <p>
        Follow all the activities at our Facebook site{" "}
        <a href="https://www.facebook.com/MilesForMM">
          https://www.facebook.com/MilesForMM
        </a>
      </p>
    </article>
    <HorizontalRule />
  </div>
);
