import Document, { Html, Head, Main, NextScript } from 'next/document';

class MyDocument extends Document {
    render() {
        return (
            <Html lang="zxxx">
                <Head>
                    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" 
                    rel="stylesheet" 
                    /> 
                    <link 
                        href="https://fonts.googleapis.com/css2?family=Jost:wght@100;300;400;500;600;700;800;900&display=swap" 
                        rel="stylesheet" 
                    /> 
                    <link rel="icon" type="image/png" href="/images/favicon.png"></link>
                </Head>
                <body>
                    <Main />
                    <NextScript />
                </body>
            </Html>
        )
    }
}

export default MyDocument;