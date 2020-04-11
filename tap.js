function tap(value, callback) {
    callback(value);
    return value;
}

Array.prototype.tap = function (callback) {
    for (const value of this) {
        callback(value);
    }

    return this;
};

module.exports = {
    tap,
};
