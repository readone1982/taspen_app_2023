<!-- Styles -->
<style>
    hr {
        box-sizing: content-box;
        height: 0;
        overflow: visible;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin-top: 0;
        margin-bottom: 0.5rem;
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    abbr[title],
    abbr[data-original-title] {
        text-decoration: underline;
        -webkit-text-decoration: underline dotted;
        text-decoration: underline dotted;
        cursor: help;
        border-bottom: 0;
        -webkit-text-decoration-skip-ink: none;
        text-decoration-skip-ink: none;
    }

    address {
        margin-bottom: 1rem;
        font-style: normal;
        line-height: inherit;
    }

    ol,
    ul,
    dl {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    ol ol,
    ul ul,
    ol ul,
    ul ol {
        margin-bottom: 0;
    }

    dt {
        font-weight: 700;
    }

    dd {
        margin-bottom: 0.5rem;
        margin-left: 0;
    }

    blockquote {
        margin: 0 0 1rem;
    }

    b,
    strong {
        font-weight: bolder;
    }

    small {
        font-size: 80%;
    }

    sub,
    sup {
        position: relative;
        font-size: 75%;
        line-height: 0;
        vertical-align: baseline;
    }

    sub {
        bottom: -0.25em;
    }

    sup {
        top: -0.5em;
    }

    a {
        color: #3490dc;
        text-decoration: none;
        background-color: transparent;
    }

    a:hover {
        color: #1d68a7;
        text-decoration: underline;
    }

    a:not([href]):not([class]) {
        color: inherit;
        text-decoration: none;
    }

    a:not([href]):not([class]):hover {
        color: inherit;
        text-decoration: none;
    }

    pre,
    code,
    kbd,
    samp {
        font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        font-size: 1em;
    }

    pre {
        margin-top: 0;
        margin-bottom: 1rem;
        overflow: auto;
        -ms-overflow-style: scrollbar;
    }

    figure {
        margin: 0 0 1rem;
    }

    img {
        vertical-align: middle;
        border-style: none;
    }

    svg {
        overflow: hidden;
        vertical-align: middle;
    }

    .col-md {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
    }

    .row-cols-md-1 > * {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .row-cols-md-2 > * {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .row-cols-md-3 > * {
        flex: 0 0 33.3333333333%;
        max-width: 33.3333333333%;
    }

    .row-cols-md-4 > * {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .row-cols-md-5 > * {
        flex: 0 0 20%;
        max-width: 20%;
    }

    .row-cols-md-6 > * {
        flex: 0 0 16.6666666667%;
        max-width: 16.6666666667%;
    }

    .col-md-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }

    .col-md-1 {
        flex: 0 0 8.3333333333%;
        max-width: 8.3333333333%;
    }

    .col-md-2 {
        flex: 0 0 16.6666666667%;
        max-width: 16.6666666667%;
    }

    .col-md-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .col-md-4 {
        flex: 0 0 33.3333333333%;
        max-width: 33.3333333333%;
    }

    .col-md-5 {
        flex: 0 0 41.6666666667%;
        max-width: 41.6666666667%;
    }

    .col-md-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .col-md-7 {
        flex: 0 0 58.3333333333%;
        max-width: 58.3333333333%;
    }

    .col-md-8 {
        flex: 0 0 66.6666666667%;
        max-width: 66.6666666667%;
    }

    .col-md-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }

    .col-md-10 {
        flex: 0 0 83.3333333333%;
        max-width: 83.3333333333%;
    }

    .col-md-11 {
        flex: 0 0 91.6666666667%;
        max-width: 91.6666666667%;
    }

    .col-md-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .order-md-first {
        order: -1;
    }

    .order-md-last {
        order: 13;
    }

    .order-md-0 {
        order: 0;
    }

    .order-md-1 {
        order: 1;
    }

    .order-md-2 {
        order: 2;
    }

    .order-md-3 {
        order: 3;
    }

    .order-md-4 {
        order: 4;
    }

    .order-md-5 {
        order: 5;
    }

    .order-md-6 {
        order: 6;
    }

    .order-md-7 {
        order: 7;
    }

    .order-md-8 {
        order: 8;
    }

    .order-md-9 {
        order: 9;
    }

    .order-md-10 {
        order: 10;
    }

    .order-md-11 {
        order: 11;
    }

    .order-md-12 {
        order: 12;
    }

    .offset-md-0 {
        margin-left: 0;
    }

    .offset-md-1 {
        margin-left: 8.3333333333%;
    }

    .offset-md-2 {
        margin-left: 16.6666666667%;
    }

    .offset-md-3 {
        margin-left: 25%;
    }

    .offset-md-4 {
        margin-left: 33.3333333333%;
    }

    .offset-md-5 {
        margin-left: 41.6666666667%;
    }

    .offset-md-6 {
        margin-left: 50%;
    }

    .offset-md-7 {
        margin-left: 58.3333333333%;
    }

    .offset-md-8 {
        margin-left: 66.6666666667%;
    }

    .offset-md-9 {
        margin-left: 75%;
    }

    .offset-md-10 {
        margin-left: 83.3333333333%;
    }

    .offset-md-11 {
        margin-left: 91.6666666667%;
    }

    table {
        border-collapse: collapse;
    }

    caption {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        color: #6c757d;
        text-align: left;
        caption-side: bottom;
    }

    th {
        text-align: inherit;
        text-align: -webkit-match-parent;
    }

    label {
        display: inline-block;
        margin-bottom: 0.5rem;
    }

    button {
        border-radius: 0;
    }

    button:focus {
        outline: 1px dotted;
        outline: 5px auto -webkit-focus-ring-color;
    }

    input,
    button,
    select,
    optgroup,
    textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }

    button,
    input {
        overflow: visible;
    }

    button,
    select {
        text-transform: none;
    }

    [role=button] {
        cursor: pointer;
    }

    select {
        word-wrap: normal;
    }

    button,
    [type=button],
    [type=reset],
    [type=submit] {
        -webkit-appearance: button;
    }

    button:not(:disabled),
    [type=button]:not(:disabled),
    [type=reset]:not(:disabled),
    [type=submit]:not(:disabled) {
        cursor: pointer;
    }

    button::-moz-focus-inner,
    [type=button]::-moz-focus-inner,
    [type=reset]::-moz-focus-inner,
    [type=submit]::-moz-focus-inner {
        padding: 0;
        border-style: none;
    }

    input[type=radio],
    input[type=checkbox] {
        box-sizing: border-box;
        padding: 0;
    }

    textarea {
        overflow: auto;
        resize: vertical;
    }

    fieldset {
        min-width: 0;
        padding: 0;
        margin: 0;
        border: 0;
    }

    legend {
        display: block;
        width: 100%;
        max-width: 100%;
        padding: 0;
        margin-bottom: 0.5rem;
        font-size: 1.5rem;
        line-height: inherit;
        color: inherit;
        white-space: normal;
    }

    progress {
        vertical-align: baseline;
    }

    h1,
    .h1 {
        font-size: 2.25rem;
    }

    h2,
    .h2 {
        font-size: 1.8rem;
    }

    h3,
    .h3 {
        font-size: 1.575rem;
    }

    h4,
    .h4 {
        font-size: 1.35rem;
    }

    h5,
    .h5 {
        font-size: 1.125rem;
    }

    h6,
    .h6 {
        font-size: 0.9rem;
    }

    .lead {
        font-size: 1.125rem;
        font-weight: 300;
    }

    .display-1 {
        font-size: 6rem;
        font-weight: 300;
        line-height: 1.2;
    }

    .display-2 {
        font-size: 5.5rem;
        font-weight: 300;
        line-height: 1.2;
    }

    .display-3 {
        font-size: 4.5rem;
        font-weight: 300;
        line-height: 1.2;
    }

    .display-4 {
        font-size: 3.5rem;
        font-weight: 300;
        line-height: 1.2;
    }

    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
    }

    small,
    .small {
        font-size: 80%;
        font-weight: 400;
    }

    mark,
    .mark {
        padding: 0.2em;
        background-color: #fcf8e3;
    }

    .list-unstyled {
        padding-left: 0;
        list-style: none;
    }

    .list-inline {
        padding-left: 0;
        list-style: none;
    }

    .list-inline-item {
        display: inline-block;
    }

    .list-inline-item:not(:last-child) {
        margin-right: 0.5rem;
    }

    .initialism {
        font-size: 90%;
        text-transform: uppercase;
    }

    .blockquote {
        margin-bottom: 1rem;
        font-size: 1.125rem;
    }

    .blockquote-footer {
        display: block;
        font-size: 80%;
        color: #6c757d;
    }

    .blockquote-footer::before {
        content: "\2014\A0";
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    .img-thumbnail {
        padding: 0.25rem;
        background-color: #f8fafc;
        border: 1px solid #dee2e6;
        border-radius: 0.25rem;
        max-width: 100%;
        height: auto;
    }

    .figure {
        display: inline-block;
    }

    .figure-img {
        margin-bottom: 0.5rem;
        line-height: 1;
    }

    .figure-caption {
        font-size: 90%;
        color: #6c757d;
    }

    code {
        font-size: 87.5%;
        color: #f66d9b;
        word-wrap: break-word;
    }

    a>code {
        color: inherit;
    }

    kbd {
        padding: 0.2rem 0.4rem;
        font-size: 87.5%;
        color: #fff;
        background-color: #212529;
        border-radius: 0.2rem;
    }

    kbd kbd {
        padding: 0;
        font-size: 100%;
        font-weight: 700;
    }

    pre {
        display: block;
        font-size: 87.5%;
        color: #212529;
    }

    pre code {
        font-size: inherit;
        color: inherit;
        word-break: normal;
    }

    .pre-scrollable {
        max-height: 340px;
        overflow-y: scroll;
    }

    .container,
    .container-fluid,
    .container-xl,
    .container-lg,
    .container-md,
    .container-sm {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    @media (min-width: 576px) {

        .container-sm,
        .container {
            max-width: 540px;
        }
    }

    @media (min-width: 768px) {

        .container-md,
        .container-sm,
        .container {
            max-width: 720px;
        }
    }

    @media (min-width: 992px) {

        .container-lg,
        .container-md,
        .container-sm,
        .container {
            max-width: 960px;
        }
    }

    @media (min-width: 1200px) {

        .container-xl,
        .container-lg,
        .container-md,
        .container-sm,
        .container {
            max-width: 1140px;
        }
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .no-gutters {
        margin-right: 0;
        margin-left: 0;
    }

    .no-gutters>.col,
    .no-gutters>[class*=col-] {
        padding-right: 0;
        padding-left: 0;
    }

    .col-xl,
    .col-xl-auto,
    .col-xl-12,
    .col-xl-11,
    .col-xl-10,
    .col-xl-9,
    .col-xl-8,
    .col-xl-7,
    .col-xl-6,
    .col-xl-5,
    .col-xl-4,
    .col-xl-3,
    .col-xl-2,
    .col-xl-1,
    .col-lg,
    .col-lg-auto,
    .col-lg-12,
    .col-lg-11,
    .col-lg-10,
    .col-lg-9,
    .col-lg-8,
    .col-lg-7,
    .col-lg-6,
    .col-lg-5,
    .col-lg-4,
    .col-lg-3,
    .col-lg-2,
    .col-lg-1,
    .col-md,
    .col-md-auto,
    .col-md-12,
    .col-md-11,
    .col-md-10,
    .col-md-9,
    .col-md-8,
    .col-md-7,
    .col-md-6,
    .col-md-5,
    .col-md-4,
    .col-md-3,
    .col-md-2,
    .col-md-1,
    .col-sm,
    .col-sm-auto,
    .col-sm-12,
    .col-sm-11,
    .col-sm-10,
    .col-sm-9,
    .col-sm-8,
    .col-sm-7,
    .col-sm-6,
    .col-sm-5,
    .col-sm-4,
    .col-sm-3,
    .col-sm-2,
    .col-sm-1,
    .col,
    .col-auto,
    .col-12,
    .col-11,
    .col-10,
    .col-9,
    .col-8,
    .col-7,
    .col-6,
    .col-5,
    .col-4,
    .col-3,
    .col-2,
    .col-1 {
        position: relative;
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
    }

    .col {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
    }

    .row-cols-1>* {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .row-cols-2>* {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .row-cols-3>* {
        flex: 0 0 33.3333333333%;
        max-width: 33.3333333333%;
    }

    .row-cols-4>* {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .row-cols-5>* {
        flex: 0 0 20%;
        max-width: 20%;
    }

    .row-cols-6>* {
        flex: 0 0 16.6666666667%;
        max-width: 16.6666666667%;
    }

    .col-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%;
    }

    .col-1 {
        flex: 0 0 8.3333333333%;
        max-width: 8.3333333333%;
    }

    .col-2 {
        flex: 0 0 16.6666666667%;
        max-width: 16.6666666667%;
    }

    .col-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .col-4 {
        flex: 0 0 33.3333333333%;
        max-width: 33.3333333333%;
    }

    .col-5 {
        flex: 0 0 41.6666666667%;
        max-width: 41.6666666667%;
    }

    .col-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .col-7 {
        flex: 0 0 58.3333333333%;
        max-width: 58.3333333333%;
    }

    .col-8 {
        flex: 0 0 66.6666666667%;
        max-width: 66.6666666667%;
    }

    .col-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }

    .col-10 {
        flex: 0 0 83.3333333333%;
        max-width: 83.3333333333%;
    }

    .col-11 {
        flex: 0 0 91.6666666667%;
        max-width: 91.6666666667%;
    }

    .col-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .order-first {
        order: -1;
    }

    .order-last {
        order: 13;
    }

    .order-0 {
        order: 0;
    }

    .order-1 {
        order: 1;
    }

    .order-2 {
        order: 2;
    }

    .order-3 {
        order: 3;
    }

    .order-4 {
        order: 4;
    }

    .order-5 {
        order: 5;
    }

    .order-6 {
        order: 6;
    }

    .order-7 {
        order: 7;
    }

    .order-8 {
        order: 8;
    }

    .order-9 {
        order: 9;
    }

    .order-10 {
        order: 10;
    }

    .order-11 {
        order: 11;
    }

    .order-12 {
        order: 12;
    }

    .offset-1 {
        margin-left: 8.3333333333%;
    }

    .offset-2 {
        margin-left: 16.6666666667%;
    }

    .offset-3 {
        margin-left: 25%;
    }

    .offset-4 {
        margin-left: 33.3333333333%;
    }

    .offset-5 {
        margin-left: 41.6666666667%;
    }

    .offset-6 {
        margin-left: 50%;
    }

    .offset-7 {
        margin-left: 58.3333333333%;
    }

    .offset-8 {
        margin-left: 66.6666666667%;
    }

    .offset-9 {
        margin-left: 75%;
    }

    .offset-10 {
        margin-left: 83.3333333333%;
    }

    .offset-11 {
        margin-left: 91.6666666667%;
    }

    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
    }

    .table th,
    .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
    }

    .table tbody+tbody {
        border-top: 2px solid #dee2e6;
    }

    .table-sm th,
    .table-sm td {
        padding: 0.3rem;
    }

    .table-bordered {
        border: 1px solid #dee2e6;
    }

    .table-bordered th,
    .table-bordered td {
        border: 1px solid #dee2e6;
    }

    .table-bordered thead th,
    .table-bordered thead td {
        border-bottom-width: 2px;
    }

    .table-borderless th,
    .table-borderless td,
    .table-borderless thead th,
    .table-borderless tbody+tbody {
        border: 0;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, 0.05);
    }

    .table-hover tbody tr:hover {
        color: #212529;
        background-color: rgba(0, 0, 0, 0.075);
    }

    .table-primary,
    .table-primary>th,
    .table-primary>td {
        background-color: #c6e0f5;
    }

    .table-primary th,
    .table-primary td,
    .table-primary thead th,
    .table-primary tbody+tbody {
        border-color: #95c5ed;
    }

    .table-hover .table-primary:hover {
        background-color: #b0d4f1;
    }

    .table-hover .table-primary:hover>td,
    .table-hover .table-primary:hover>th {
        background-color: #b0d4f1;
    }

    .table-secondary,
    .table-secondary>th,
    .table-secondary>td {
        background-color: #d6d8db;
    }

    .table-secondary th,
    .table-secondary td,
    .table-secondary thead th,
    .table-secondary tbody+tbody {
        border-color: #b3b7bb;
    }

    .table-hover .table-secondary:hover {
        background-color: #c8cbcf;
    }

    .table-hover .table-secondary:hover>td,
    .table-hover .table-secondary:hover>th {
        background-color: #c8cbcf;
    }

    .table-success,
    .table-success>th,
    .table-success>td {
        background-color: #c7eed8;
    }

    .table-success th,
    .table-success td,
    .table-success thead th,
    .table-success tbody+tbody {
        border-color: #98dfb6;
    }

    .table-hover .table-success:hover {
        background-color: #b3e8ca;
    }

    .table-hover .table-success:hover>td,
    .table-hover .table-success:hover>th {
        background-color: #b3e8ca;
    }

    .table-info,
    .table-info>th,
    .table-info>td {
        background-color: #d6e9f9;
    }

    .table-info th,
    .table-info td,
    .table-info thead th,
    .table-info tbody+tbody {
        border-color: #b3d7f5;
    }

    .table-hover .table-info:hover {
        background-color: #c0ddf6;
    }

    .table-hover .table-info:hover>td,
    .table-hover .table-info:hover>th {
        background-color: #c0ddf6;
    }

    .table-warning,
    .table-warning>th,
    .table-warning>td {
        background-color: #fffacc;
    }

    .table-warning th,
    .table-warning td,
    .table-warning thead th,
    .table-warning tbody+tbody {
        border-color: #fff6a1;
    }

    .table-hover .table-warning:hover {
        background-color: #fff8b3;
    }

    .table-hover .table-warning:hover>td,
    .table-hover .table-warning:hover>th {
        background-color: #fff8b3;
    }

    .table-danger,
    .table-danger>th,
    .table-danger>td {
        background-color: #f7c6c5;
    }

    .table-danger th,
    .table-danger td,
    .table-danger thead th,
    .table-danger tbody+tbody {
        border-color: #f09593;
    }

    .table-hover .table-danger:hover {
        background-color: #f4b0af;
    }

    .table-hover .table-danger:hover>td,
    .table-hover .table-danger:hover>th {
        background-color: #f4b0af;
    }

    .table-light,
    .table-light>th,
    .table-light>td {
        background-color: #fdfdfe;
    }

    .table-light th,
    .table-light td,
    .table-light thead th,
    .table-light tbody+tbody {
        border-color: #fbfcfc;
    }

    .table-hover .table-light:hover {
        background-color: #ececf6;
    }

    .table-hover .table-light:hover>td,
    .table-hover .table-light:hover>th {
        background-color: #ececf6;
    }

    .table-dark,
    .table-dark>th,
    .table-dark>td {
        background-color: #c6c8ca;
    }

    .table-dark th,
    .table-dark td,
    .table-dark thead th,
    .table-dark tbody+tbody {
        border-color: #95999c;
    }

    .table-hover .table-dark:hover {
        background-color: #b9bbbe;
    }

    .table-hover .table-dark:hover>td,
    .table-hover .table-dark:hover>th {
        background-color: #b9bbbe;
    }

    .table-active,
    .table-active>th,
    .table-active>td {
        background-color: rgba(0, 0, 0, 0.075);
    }

    .table-hover .table-active:hover {
        background-color: rgba(0, 0, 0, 0.075);
    }

    .table-hover .table-active:hover>td,
    .table-hover .table-active:hover>th {
        background-color: rgba(0, 0, 0, 0.075);
    }

    .table .thead-dark th {
        color: #fff;
        background-color: #343a40;
        border-color: #454d55;
    }

    .table .thead-light th {
        color: #495057;
        background-color: #e9ecef;
        border-color: #dee2e6;
    }

    .table-dark {
        color: #fff;
        background-color: #343a40;
    }

    .table-dark th,
    .table-dark td,
    .table-dark thead th {
        border-color: #454d55;
    }

    .table-dark.table-bordered {
        border: 0;
    }

    .table-dark.table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(255, 255, 255, 0.05);
    }

    .table-dark.table-hover tbody tr:hover {
        color: #fff;
        background-color: rgba(255, 255, 255, 0.075);
    }

    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .table-responsive>.table-bordered {
        border: 0;
    }

    .form-control {
        display: block;
        width: 100%;
        height: calc(1.6em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 0.9rem;
        font-weight: 400;
        line-height: 1.6;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .form-control::-ms-expand {
        background-color: transparent;
        border: 0;
    }

    .form-control:-moz-focusring {
        color: transparent;
        text-shadow: 0 0 0 #495057;
    }

    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #a1cbef;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(52, 144, 220, 0.25);
    }

    .form-control::-moz-placeholder {
        color: #6c757d;
        opacity: 1;
    }

    .form-control:-ms-input-placeholder {
        color: #6c757d;
        opacity: 1;
    }

    .form-control::placeholder {
        color: #6c757d;
        opacity: 1;
    }

    .form-control:disabled,
    .form-control[readonly] {
        background-color: #e9ecef;
        opacity: 1;
    }

    input[type=date].form-control,
    input[type=time].form-control,
    input[type=datetime-local].form-control,
    input[type=month].form-control {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    select.form-control:focus::-ms-value {
        color: #495057;
        background-color: #fff;
    }

    .form-control-file,
    .form-control-range {
        display: block;
        width: 100%;
    }

    .col-form-label {
        padding-top: calc(0.375rem + 1px);
        padding-bottom: calc(0.375rem + 1px);
        margin-bottom: 0;
        font-size: inherit;
        line-height: 1.6;
    }

    .col-form-label-lg {
        padding-top: calc(0.5rem + 1px);
        padding-bottom: calc(0.5rem + 1px);
        font-size: 1.125rem;
        line-height: 1.5;
    }

    .col-form-label-sm {
        padding-top: calc(0.25rem + 1px);
        padding-bottom: calc(0.25rem + 1px);
        font-size: 0.7875rem;
        line-height: 1.5;
    }

    .form-control-plaintext {
        display: block;
        width: 100%;
        padding: 0.375rem 0;
        margin-bottom: 0;
        font-size: 0.9rem;
        line-height: 1.6;
        color: #212529;
        background-color: transparent;
        border: solid transparent;
        border-width: 1px 0;
    }

    .form-control-plaintext.form-control-sm,
    .form-control-plaintext.form-control-lg {
        padding-right: 0;
        padding-left: 0;
    }

    .form-control-sm {
        height: calc(1.5em + 0.5rem + 2px);
        padding: 0.25rem 0.5rem;
        font-size: 0.7875rem;
        line-height: 1.5;
        border-radius: 0.2rem;
    }

    .form-control-lg {
        height: calc(1.5em + 1rem + 2px);
        padding: 0.5rem 1rem;
        font-size: 1.125rem;
        line-height: 1.5;
        border-radius: 0.3rem;
    }

    select.form-control[size],
    select.form-control[multiple] {
        height: auto;
    }

    textarea.form-control {
        height: auto;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-text {
        display: block;
        margin-top: 0.25rem;
    }

    .form-row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -5px;
        margin-left: -5px;
    }

    .form-row>.col,
    .form-row>[class*=col-] {
        padding-right: 5px;
        padding-left: 5px;
    }

    .form-check {
        position: relative;
        display: block;
        padding-left: 1.25rem;
    }

    .form-check-input {
        position: absolute;
        margin-top: 0.3rem;
        margin-left: -1.25rem;
    }

    .form-check-input[disabled]~.form-check-label,
    .form-check-input:disabled~.form-check-label {
        color: #6c757d;
    }

    .form-check-label {
        margin-bottom: 0;
    }

    .form-check-inline {
        display: inline-flex;
        align-items: center;
        padding-left: 0;
        margin-right: 0.75rem;
    }

    .form-check-inline .form-check-input {
        position: static;
        margin-top: 0;
        margin-right: 0.3125rem;
        margin-left: 0;
    }

    .valid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 80%;
        color: #38c172;
    }

    .valid-tooltip {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 5;
        display: none;
        max-width: 100%;
        padding: 0.25rem 0.5rem;
        margin-top: 0.1rem;
        font-size: 0.7875rem;
        line-height: 1.6;
        color: #fff;
        background-color: rgba(56, 193, 114, 0.9);
        border-radius: 0.25rem;
    }

    .was-validated :valid~.valid-feedback,
    .was-validated :valid~.valid-tooltip,
    .is-valid~.valid-feedback,
    .is-valid~.valid-tooltip {
        display: block;
    }
    .btn {
        display: inline-block;
        font-weight: 400;
        color: #212529;
        text-align: center;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 0.9rem;
        line-height: 1.6;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .btn {
            transition: none;
        }
    }

    .btn:hover {
        color: #212529;
        text-decoration: none;
    }

    .btn:focus,
    .btn.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(52, 144, 220, 0.25);
    }

    .btn.disabled,
    .btn:disabled {
        opacity: 0.65;
    }

    .btn:not(:disabled):not(.disabled) {
        cursor: pointer;
    }

    a.btn.disabled,
    fieldset:disabled a.btn {
        pointer-events: none;
    }

    .btn-primary {
        color: #fff;
        background-color: #3490dc;
        border-color: #3490dc;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #227dc7;
        border-color: #2176bd;
    }

    .btn-primary:focus,
    .btn-primary.focus {
        color: #fff;
        background-color: #227dc7;
        border-color: #2176bd;
        box-shadow: 0 0 0 0.2rem rgba(82, 161, 225, 0.5);
    }

    .btn-primary.disabled,
    .btn-primary:disabled {
        color: #fff;
        background-color: #3490dc;
        border-color: #3490dc;
    }

    .btn-primary:not(:disabled):not(.disabled):active,
    .btn-primary:not(:disabled):not(.disabled).active,
    .show>.btn-primary.dropdown-toggle {
        color: #fff;
        background-color: #2176bd;
        border-color: #1f6fb2;
    }

    .btn-primary:not(:disabled):not(.disabled):active:focus,
    .btn-primary:not(:disabled):not(.disabled).active:focus,
    .show>.btn-primary.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(82, 161, 225, 0.5);
    }

    .btn-secondary {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-secondary:hover {
        color: #fff;
        background-color: #5a6268;
        border-color: #545b62;
    }

    .btn-secondary:focus,
    .btn-secondary.focus {
        color: #fff;
        background-color: #5a6268;
        border-color: #545b62;
        box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
    }

    .btn-secondary.disabled,
    .btn-secondary:disabled {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-secondary:not(:disabled):not(.disabled):active,
    .btn-secondary:not(:disabled):not(.disabled).active,
    .show>.btn-secondary.dropdown-toggle {
        color: #fff;
        background-color: #545b62;
        border-color: #4e555b;
    }

    .btn-secondary:not(:disabled):not(.disabled):active:focus,
    .btn-secondary:not(:disabled):not(.disabled).active:focus,
    .show>.btn-secondary.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
    }

    .btn-success {
        color: #fff;
        background-color: #38c172;
        border-color: #38c172;
    }

    .btn-success:hover {
        color: #fff;
        background-color: #2fa360;
        border-color: #2d995b;
    }

    .btn-success:focus,
    .btn-success.focus {
        color: #fff;
        background-color: #2fa360;
        border-color: #2d995b;
        box-shadow: 0 0 0 0.2rem rgba(86, 202, 135, 0.5);
    }

    .btn-success.disabled,
    .btn-success:disabled {
        color: #fff;
        background-color: #38c172;
        border-color: #38c172;
    }

    .btn-success:not(:disabled):not(.disabled):active,
    .btn-success:not(:disabled):not(.disabled).active,
    .show>.btn-success.dropdown-toggle {
        color: #fff;
        background-color: #2d995b;
        border-color: #2a9055;
    }

    .btn-success:not(:disabled):not(.disabled):active:focus,
    .btn-success:not(:disabled):not(.disabled).active:focus,
    .show>.btn-success.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(86, 202, 135, 0.5);
    }

    .btn-info {
        color: #212529;
        background-color: #6cb2eb;
        border-color: #6cb2eb;
    }

    .btn-info:hover {
        color: #fff;
        background-color: #4aa0e6;
        border-color: #3f9ae5;
    }

    .btn-info:focus,
    .btn-info.focus {
        color: #fff;
        background-color: #4aa0e6;
        border-color: #3f9ae5;
        box-shadow: 0 0 0 0.2rem rgba(97, 157, 206, 0.5);
    }

    .btn-info.disabled,
    .btn-info:disabled {
        color: #212529;
        background-color: #6cb2eb;
        border-color: #6cb2eb;
    }

    .btn-info:not(:disabled):not(.disabled):active,
    .btn-info:not(:disabled):not(.disabled).active,
    .show>.btn-info.dropdown-toggle {
        color: #fff;
        background-color: #3f9ae5;
        border-color: #3495e3;
    }

    .btn-info:not(:disabled):not(.disabled):active:focus,
    .btn-info:not(:disabled):not(.disabled).active:focus,
    .show>.btn-info.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(97, 157, 206, 0.5);
    }

    .btn-warning {
        color: #212529;
        background-color: #ffed4a;
        border-color: #ffed4a;
    }

    .btn-warning:hover {
        color: #212529;
        background-color: #ffe924;
        border-color: #ffe817;
    }

    .btn-warning:focus,
    .btn-warning.focus {
        color: #212529;
        background-color: #ffe924;
        border-color: #ffe817;
        box-shadow: 0 0 0 0.2rem rgba(222, 207, 69, 0.5);
    }

    .btn-warning.disabled,
    .btn-warning:disabled {
        color: #212529;
        background-color: #ffed4a;
        border-color: #ffed4a;
    }

    .btn-warning:not(:disabled):not(.disabled):active,
    .btn-warning:not(:disabled):not(.disabled).active,
    .show>.btn-warning.dropdown-toggle {
        color: #212529;
        background-color: #ffe817;
        border-color: #ffe70a;
    }

    .btn-warning:not(:disabled):not(.disabled):active:focus,
    .btn-warning:not(:disabled):not(.disabled).active:focus,
    .show>.btn-warning.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(222, 207, 69, 0.5);
    }

    .btn-danger {
        color: #fff;
        background-color: #e3342f;
        border-color: #e3342f;
    }

    .btn-danger:hover {
        color: #fff;
        background-color: #d0211c;
        border-color: #c51f1a;
    }

    .btn-danger:focus,
    .btn-danger.focus {
        color: #fff;
        background-color: #d0211c;
        border-color: #c51f1a;
        box-shadow: 0 0 0 0.2rem rgba(231, 82, 78, 0.5);
    }

    .btn-danger.disabled,
    .btn-danger:disabled {
        color: #fff;
        background-color: #e3342f;
        border-color: #e3342f;
    }

    .btn-danger:not(:disabled):not(.disabled):active,
    .btn-danger:not(:disabled):not(.disabled).active,
    .show>.btn-danger.dropdown-toggle {
        color: #fff;
        background-color: #c51f1a;
        border-color: #b91d19;
    }

    .btn-danger:not(:disabled):not(.disabled):active:focus,
    .btn-danger:not(:disabled):not(.disabled).active:focus,
    .show>.btn-danger.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(231, 82, 78, 0.5);
    }

    .btn-light {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa;
    }

    .btn-light:hover {
        color: #212529;
        background-color: #e2e6ea;
        border-color: #dae0e5;
    }

    .btn-light:focus,
    .btn-light.focus {
        color: #212529;
        background-color: #e2e6ea;
        border-color: #dae0e5;
        box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
    }

    .btn-light.disabled,
    .btn-light:disabled {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa;
    }

    .btn-light:not(:disabled):not(.disabled):active,
    .btn-light:not(:disabled):not(.disabled).active,
    .show>.btn-light.dropdown-toggle {
        color: #212529;
        background-color: #dae0e5;
        border-color: #d3d9df;
    }

    .btn-light:not(:disabled):not(.disabled):active:focus,
    .btn-light:not(:disabled):not(.disabled).active:focus,
    .show>.btn-light.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
    }

    .btn-dark {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40;
    }

    .btn-dark:hover {
        color: #fff;
        background-color: #23272b;
        border-color: #1d2124;
    }

    .btn-dark:focus,
    .btn-dark.focus {
        color: #fff;
        background-color: #23272b;
        border-color: #1d2124;
        box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
    }

    .btn-dark.disabled,
    .btn-dark:disabled {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40;
    }

    .btn-dark:not(:disabled):not(.disabled):active,
    .btn-dark:not(:disabled):not(.disabled).active,
    .show>.btn-dark.dropdown-toggle {
        color: #fff;
        background-color: #1d2124;
        border-color: #171a1d;
    }

    .btn-dark:not(:disabled):not(.disabled):active:focus,
    .btn-dark:not(:disabled):not(.disabled).active:focus,
    .show>.btn-dark.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
    }

    .btn-outline-primary {
        color: #3490dc;
        border-color: #3490dc;
    }

    .btn-outline-primary:hover {
        color: #fff;
        background-color: #3490dc;
        border-color: #3490dc;
    }

    .btn-outline-primary:focus,
    .btn-outline-primary.focus {
        box-shadow: 0 0 0 0.2rem rgba(52, 144, 220, 0.5);
    }

    .btn-outline-primary.disabled,
    .btn-outline-primary:disabled {
        color: #3490dc;
        background-color: transparent;
    }

    .btn-outline-primary:not(:disabled):not(.disabled):active,
    .btn-outline-primary:not(:disabled):not(.disabled).active,
    .show>.btn-outline-primary.dropdown-toggle {
        color: #fff;
        background-color: #3490dc;
        border-color: #3490dc;
    }

    .btn-outline-primary:not(:disabled):not(.disabled):active:focus,
    .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-primary.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(52, 144, 220, 0.5);
    }

    .btn-outline-secondary {
        color: #6c757d;
        border-color: #6c757d;
    }

    .btn-outline-secondary:hover {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-outline-secondary:focus,
    .btn-outline-secondary.focus {
        box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
    }

    .btn-outline-secondary.disabled,
    .btn-outline-secondary:disabled {
        color: #6c757d;
        background-color: transparent;
    }

    .btn-outline-secondary:not(:disabled):not(.disabled):active,
    .btn-outline-secondary:not(:disabled):not(.disabled).active,
    .show>.btn-outline-secondary.dropdown-toggle {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
    .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-secondary.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
    }

    .btn-outline-success {
        color: #38c172;
        border-color: #38c172;
    }

    .btn-outline-success:hover {
        color: #fff;
        background-color: #38c172;
        border-color: #38c172;
    }

    .btn-outline-success:focus,
    .btn-outline-success.focus {
        box-shadow: 0 0 0 0.2rem rgba(56, 193, 114, 0.5);
    }

    .btn-outline-success.disabled,
    .btn-outline-success:disabled {
        color: #38c172;
        background-color: transparent;
    }

    .btn-outline-success:not(:disabled):not(.disabled):active,
    .btn-outline-success:not(:disabled):not(.disabled).active,
    .show>.btn-outline-success.dropdown-toggle {
        color: #fff;
        background-color: #38c172;
        border-color: #38c172;
    }

    .btn-outline-success:not(:disabled):not(.disabled):active:focus,
    .btn-outline-success:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-success.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(56, 193, 114, 0.5);
    }

    .btn-outline-info {
        color: #6cb2eb;
        border-color: #6cb2eb;
    }

    .btn-outline-info:hover {
        color: #212529;
        background-color: #6cb2eb;
        border-color: #6cb2eb;
    }

    .btn-outline-info:focus,
    .btn-outline-info.focus {
        box-shadow: 0 0 0 0.2rem rgba(108, 178, 235, 0.5);
    }

    .btn-outline-info.disabled,
    .btn-outline-info:disabled {
        color: #6cb2eb;
        background-color: transparent;
    }

    .btn-outline-info:not(:disabled):not(.disabled):active,
    .btn-outline-info:not(:disabled):not(.disabled).active,
    .show>.btn-outline-info.dropdown-toggle {
        color: #212529;
        background-color: #6cb2eb;
        border-color: #6cb2eb;
    }

    .btn-outline-info:not(:disabled):not(.disabled):active:focus,
    .btn-outline-info:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-info.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(108, 178, 235, 0.5);
    }

    .btn-outline-warning {
        color: #ffed4a;
        border-color: #ffed4a;
    }

    .btn-outline-warning:hover {
        color: #212529;
        background-color: #ffed4a;
        border-color: #ffed4a;
    }

    .btn-outline-warning:focus,
    .btn-outline-warning.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 237, 74, 0.5);
    }

    .btn-outline-warning.disabled,
    .btn-outline-warning:disabled {
        color: #ffed4a;
        background-color: transparent;
    }

    .btn-outline-warning:not(:disabled):not(.disabled):active,
    .btn-outline-warning:not(:disabled):not(.disabled).active,
    .show>.btn-outline-warning.dropdown-toggle {
        color: #212529;
        background-color: #ffed4a;
        border-color: #ffed4a;
    }

    .btn-outline-warning:not(:disabled):not(.disabled):active:focus,
    .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-warning.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 237, 74, 0.5);
    }

    .btn-outline-danger {
        color: #e3342f;
        border-color: #e3342f;
    }

    .btn-outline-danger:hover {
        color: #fff;
        background-color: #e3342f;
        border-color: #e3342f;
    }

    .btn-outline-danger:focus,
    .btn-outline-danger.focus {
        box-shadow: 0 0 0 0.2rem rgba(227, 52, 47, 0.5);
    }

    .btn-outline-danger.disabled,
    .btn-outline-danger:disabled {
        color: #e3342f;
        background-color: transparent;
    }

    .btn-outline-danger:not(:disabled):not(.disabled):active,
    .btn-outline-danger:not(:disabled):not(.disabled).active,
    .show>.btn-outline-danger.dropdown-toggle {
        color: #fff;
        background-color: #e3342f;
        border-color: #e3342f;
    }

    .btn-outline-danger:not(:disabled):not(.disabled):active:focus,
    .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-danger.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(227, 52, 47, 0.5);
    }

    .btn-outline-light {
        color: #f8f9fa;
        border-color: #f8f9fa;
    }

    .btn-outline-light:hover {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa;
    }

    .btn-outline-light:focus,
    .btn-outline-light.focus {
        box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
    }

    .btn-outline-light.disabled,
    .btn-outline-light:disabled {
        color: #f8f9fa;
        background-color: transparent;
    }

    .btn-outline-light:not(:disabled):not(.disabled):active,
    .btn-outline-light:not(:disabled):not(.disabled).active,
    .show>.btn-outline-light.dropdown-toggle {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa;
    }

    .btn-outline-light:not(:disabled):not(.disabled):active:focus,
    .btn-outline-light:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-light.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
    }

    .btn-outline-dark {
        color: #343a40;
        border-color: #343a40;
    }

    .btn-outline-dark:hover {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40;
    }

    .btn-outline-dark:focus,
    .btn-outline-dark.focus {
        box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
    }

    .btn-outline-dark.disabled,
    .btn-outline-dark:disabled {
        color: #343a40;
        background-color: transparent;
    }

    .btn-outline-dark:not(:disabled):not(.disabled):active,
    .btn-outline-dark:not(:disabled):not(.disabled).active,
    .show>.btn-outline-dark.dropdown-toggle {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40;
    }

    .btn-outline-dark:not(:disabled):not(.disabled):active:focus,
    .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
    .show>.btn-outline-dark.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
    }

    .btn-link {
        font-weight: 400;
        color: #3490dc;
        text-decoration: none;
    }

    .btn-link:hover {
        color: #1d68a7;
        text-decoration: underline;
    }

    .btn-link:focus,
    .btn-link.focus {
        text-decoration: underline;
    }

    .btn-link:disabled,
    .btn-link.disabled {
        color: #6c757d;
        pointer-events: none;
    }

    .btn-lg,
    .btn-group-lg>.btn {
        padding: 0.5rem 1rem;
        font-size: 1.125rem;
        line-height: 1.5;
        border-radius: 0.3rem;
    }

    .btn-sm,
    .btn-group-sm>.btn {
        padding: 0.25rem 0.5rem;
        font-size: 0.7875rem;
        line-height: 1.5;
        border-radius: 0.2rem;
    }

    .btn-block {
        display: block;
        width: 100%;
    }

    .btn-block+.btn-block {
        margin-top: 0.5rem;
    }

    input[type=submit].btn-block,
    input[type=reset].btn-block,
    input[type=button].btn-block {
        width: 100%;
    }

    .fade {
        transition: opacity 0.15s linear;
    }
    .media {
        display: flex;
        align-items: flex-start;
    }
</style>
