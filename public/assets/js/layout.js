function adjustContentWrapperHeight() {
    const headerTitle =
        document.getElementById("head-title")?.offsetHeight ?? 0;
    const dashboard = document.getElementById("dashboard")?.offsetHeight ?? 0;
    const information =
        document.getElementById("information")?.offsetHeight ?? 0;
    const search = document.getElementById("search")?.offsetHeight ?? 0;
    const title = document.getElementById("title")?.offsetHeight ?? 0;
    const navTitle = document.getElementById("nav-title")?.offsetHeight ?? 0;
    const content = document.getElementById("content")?.offsetHeight ?? 0;
    const footerHeight = document.getElementById("footer")?.offsetHeight ?? 0;
    const contentWrapper = document.getElementById("content-wrapper");

    const viewportWidth = window.innerWidth;

    console.log("-----------------------------------");
    console.log(viewportWidth);
    console.log("headerTitle : " + headerTitle);
    console.log("dashboard : " + dashboard);
    console.log("information : " + information);
    console.log("search : " + search);
    console.log("title : " + title);
    console.log("navTitle : " + navTitle);
    console.log("content : " + content);
    console.log("footerHeight : " + footerHeight);
    console.log("-----------------------------------");

    if (viewportWidth >= 1349) {
        contentWrapper.style.height = `calc(100vh - ${200}px - ${headerTitle}px - ${dashboard}px - ${information}px - ${search}px - ${title}px - ${navTitle}px - ${content}px - ${footerHeight}px)`;
        const result = `calc(100vh - ${200}px - ${headerTitle}px - ${dashboard}px - ${information}px - ${search}px - ${title}px - ${navTitle}px - ${content}px - ${footerHeight}px)`;
        console.log(`:= ` + result);
        const computedHeight = window.getComputedStyle(contentWrapper).height;
        console.log(`Calculated height: ${computedHeight}`);
    } else {
        contentWrapper.style.height = ""; // Reset the height to its default value when the viewport width is less than 1200px
    }
}

function adjustContentWrapperHeightTemplateTable() {
    const headerTitle =
        document.getElementById("head-title")?.offsetHeight ?? 0;
    const dashboard = document.getElementById("dashboard")?.offsetHeight ?? 0;
    const information =
        document.getElementById("information")?.offsetHeight ?? 0;
    const search = document.getElementById("search")?.offsetHeight ?? 0;
    const title = document.getElementById("title")?.offsetHeight ?? 0;
    const navTitle = document.getElementById("nav-title")?.offsetHeight ?? 0;
    const content = document.getElementById("content")?.offsetHeight ?? 0;
    const footerHeight = document.getElementById("footer")?.offsetHeight ?? 0;
    const contentWrapper = document.getElementById("content-wrapper");

    const viewportWidth = window.innerWidth;

    console.log("-----------------------------------");
    console.log(viewportWidth);
    console.log("headerTitle : " + headerTitle);
    console.log("dashboard : " + dashboard);
    console.log("information : " + information);
    console.log("search : " + search);
    console.log("title : " + title);
    console.log("navTitle : " + navTitle);
    console.log("content : " + content);
    console.log("footerHeight : " + footerHeight);
    console.log("-----------------------------------");

    if (viewportWidth >= 800) {
        contentWrapper.style.height = `calc(100vh - ${200}px - ${headerTitle}px - ${dashboard}px - ${information}px - ${search}px - ${title}px - ${navTitle}px - ${content}px - ${footerHeight}px)`;
        const result = `calc(100vh - ${200}px - ${headerTitle}px - ${dashboard}px - ${information}px - ${search}px - ${title}px - ${navTitle}px - ${content}px - ${footerHeight}px)`;
        console.log(`:= ` + result);
        const computedHeight = window.getComputedStyle(contentWrapper).height;
        console.log(`Calculated height: ${computedHeight}`);
    } else {
        contentWrapper.style.height = ""; // Reset the height to its default value when the viewport width is less than 1200px
    }
}
