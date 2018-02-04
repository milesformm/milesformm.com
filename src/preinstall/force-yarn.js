// @flow
/* global process */
/* eslint-disable no-process-env */
// Source: https://gist.github.com/vicapow/28c1c2b10e7a6677470ac07e9a79fa95

const { execSync } = require("child_process");
const packageJson = require("../../package");

function enable () {
  const execpath = process.env && process.env.npm_execpath;
  if (execpath) {
    if (!execpath.includes("yarn")) {
      throw new Error("You must use Yarn to install, not NPM.");
    }
  }

  const actual = execSync("yarn --version")
    .toString()
    .trim();
  const expected = (packageJson.engines || {}).yarn;
  if (actual !== expected) {
    throw new Error(
      `
      You're running the wrong version of yarn. expected ${expected} but got ${String(
        actual
      )}.
      "brew upgrade yarn" might help.
      `
    );
  }
}

module.exports = {
  enable
}