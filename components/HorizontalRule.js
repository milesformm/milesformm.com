import { Fragment } from "react";
export default () => (
  <Fragment>
    <style jsx>{`
      hr {
        border: 0;
        height: 1px;
        background-image: -webkit-linear-gradient(
          left,
          rgba(255, 102, 0, 0),
          rgba(255, 102, 0, 0.75),
          rgba(255, 102, 0, 0)
        );
        background-image: -moz-linear-gradient(
          left,
          rgba(255, 102, 0, 0),
          rgba(255, 102, 0, 0.75),
          rgba(255, 102, 0, 0)
        );
        background-image: -ms-linear-gradient(
          left,
          rgba(255, 102, 0, 0),
          rgba(255, 102, 0, 0.75),
          rgba(255, 102, 0, 0)
        );
        background-image: -o-linear-gradient(
          left,
          rgba(255, 102, 0, 0),
          rgba(255, 102, 0, 0.75),
          rgba(255, 102, 0, 0)
        );
      }
    `}</style>
    <hr className="root" />
  </Fragment>
);

