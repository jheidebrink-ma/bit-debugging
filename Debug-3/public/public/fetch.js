async function getsetinfo(file) {
    const response = await fetch("https://api.scryfall.com/sets", {
        headers: {
            'Accept' : '*/*',
            'User-Agent' : 'fetchforschool/1.0'
        }
    });
    const setsinfo = await response.json();
    const rows = [];
    const outputfield = document.getElementById("test");
    outputfield.innerHTML = setsinfo.data[0];
    console.log(setsinfo);
    for (let index = 0; index < setsinfo.data.length; index++) {
        rows.push(`[${setsinfo.data[index].name}, ${setsinfo.data[index].code}, ${setsinfo.data[index].search_uri}, ${setsinfo.data[index].released_at}]`);
    }
    console.log(rows);
}
getsetinfo();

