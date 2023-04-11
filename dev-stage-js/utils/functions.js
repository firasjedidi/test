exports.htmlToReact = (htmlText) => {
    const HtmlToReactParser = require('html-to-react').Parser
    var htmlToReactParser = new HtmlToReactParser();
    return htmlToReactParser.parse(htmlText);
}