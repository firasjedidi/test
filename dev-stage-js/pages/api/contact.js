import nodemailer from 'nodemailer';
import sgTransport from 'nodemailer-sendgrid-transport';

const transporter = {
    auth: {
        // Update your SendGrid API key here
        api_key: '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'
    }
}

const mailer = nodemailer.createTransport(sgTransport(transporter));

export default async (req, res) => {
    // console.log(req.body)
    const {name, email, number, subject, text} = req.body;
    console.log(req.body);
    const data = {
        // Update your email here
        to: 'noureddine@webspirit.tn',
        from: email,
        subject: 'Hi there',
        text: text,
        html: `
            <b>From:</b> ${name} <br /> 
            <b>Number:</b> ${number} <br /> 
            <b>Subject:</b> ${subject} <br /> 
            <b>Message:</b> ${text} 
        ` 
    };
    try {
        const response = await mailer.sendMail(data);
        console.table(response)
        res.status(200).send("Email send successfully")
    } catch (error) {
        console.error(error);
        res.status(500).send("Error proccessing charge");
    }
}