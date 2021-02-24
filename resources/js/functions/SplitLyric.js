export default function (lyric) {

    let lyricExpression = []

    const getParagraphs = (lyric) =>lyric.split(/\n\n/)
    const getLines = (paragraph) => paragraph.split(/\n/)

    // Get all paragraphs with lyric
    const paragraphs = getParagraphs(lyric)

    paragraphs.forEach(paragraph => {
        // delete the empty paragraph
        if(paragraph.length > 0) {
            lyricExpression.push(getLines(paragraph.trim()))
        }
    })

    return {
        lyricExpression
    }
}
