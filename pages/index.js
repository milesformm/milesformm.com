import Head from "next/head";
import HorizontalRule from "../components/HorizontalRule";
export default () => (
  <div className="root">
    <Head>
      <title>Iowa Miles For Myeloma</title>
      <meta
        name="viewport"
        content="initial-scale=1.0, width=device-width"
        key="viewport"
      />
      <meta httpEquiv="Content-Type" content="text/html; charset=utf-8" />

      <meta
        name="description"
        content="The annual Iowa Miles for Myeloma Walk Run"
      />

      <meta name="twitter:card" content="summary" />
      <meta name="twitter:site" content="@milesformyeloma" />
      <meta name="twitter:title" content="Iowa Miles for Myeloma" />
      <meta
        name="twitter:description"
        content="The annual Iowa Miles for Myeloma Walk Run"
      />
      <meta name="twitter:creator" content="@milesformyeloma" />

      <meta name="twitter:image" content="https://pbs.twimg.com/profile_images/435250169114656768/GOb8PDEE_400x400.jpeg" />

      <meta property="og:title" content="Iowa Miles for Myeloma" />
      <meta property="og:type" content="article" />
      <meta property="og:url" content="http://www.milesformm.com/" />
      <meta property="og:image" content="https://pbs.twimg.com/profile_images/435250169114656768/GOb8PDEE_400x400.jpeg" />
      <meta property="og:description" content="The annual Iowa Miles for Myeloma Walk Run" />
      <meta property="og:site_name" content="Iowa Miles for Myeloma" />
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
      src="/static/iowamiles.jpg"
      alt="Iowa Miles for Myeloma"
    />
    <article>
     <h3>New name, same great event!</h3>
     <p>
        Eastern Iowa Miles for Myeloma is now <strong>Iowa Miles for Myeloma</strong>! This name better represented the community we encompass, with families honored and participating from all over Iowa.
     </p>
     <p>
     We are thrilled to announce that the 2019 Iowa Miles for Myeloma walk has been scheduled for <strong>September 22, 2019</strong>, again at Terry Trueblood Recreation Area in Iowa City. This will be our 7th event and we would love to have you with us!
     </p>
     <p>
     <a href="https://independent.themmrf.org/IMM">Register for the walk</a>
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
