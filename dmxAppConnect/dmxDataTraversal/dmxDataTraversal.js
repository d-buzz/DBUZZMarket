/*!
 DMXzone Data Traversal
 Version: 1.0.9
 (c) 2020 DMXzone.com
 @build 2020-02-27 17:10:16
 NOT THIS ONE
 */
dmx.Component("data-view", {
  initialData: function () {
    return {
      data: [],
      page: 1,
      pages: 1,
      items: 0,
      sort: {
        on: "",
        dir: "asc"
      },
      has: {
        first: !1,
        prev: !1,
        next: !1,
        last: !1
      }
    }
  },
  attributes: {
    data: {
      type: [Array, Object],
      default: []
    },
    filter: {
      type: String,
      default: ""
    },
    page: {
      type: Number,
      default: 1
    },
    pageSize: {
      type: Number,
      default: 0
    },
    sortOn: {
      type: String,
      default: ""
    },
    sortDir: {
      type: String,
      default: "asc",
      validate: function (t) {
        return /^(asc|desc)$/i.test(t)
      }
    }
  },
  methods: {
    select: function (t) {
      this.setPage(Number(t))
    },
    size: function (t) {
      this.props.pageSize = Number(t), this._update()
    },
    first: function () {
      this.page = 1, this.setPage(1)
    },
    prev: function () {
      var t = this.page - 1;
      t < 1 && (t = 1), t > this.data.pages && (t = this.data.pages), this.page = t, this.setPage(t)
    },
    next: function () {
      var t = this.page + 1;
      t < 1 && (t = 1), t > this.data.pages && (t = this.data.pages), this.page = t, this.setPage(t)
    },
    last: function () {
      var t = this.data.pages;
      this.page = t, this.setPage(t)
    },
    sort: function (t, e) {
      this.props.sortOn = t, this.props.sortDir = e && "desc" == e.toLowerCase() ? "desc" : "asc", this._update()
    }
  },
  render: function (t) {
    this.update({})
  },
  update: function (t) {
    JSON.stringify(this.props) != JSON.stringify(t) && (JSON.stringify(this.props.data) != JSON.stringify(t.data) && this.setData(this.props.data), this.props.page != t.page && (this.page = this.props.page)), this._update()
  },
  _update: function () {
    var t = this.props.filter,
      s = this.props.sortOn,
      e = this.props.sortDir.toLowerCase(),
      i = this.props.pageSize;
    this.filtered = this.items.slice(0), t && (this.filtered = this.filtered.filter(function (t) {
      return dmx.parse(this.props.filter, dmx.DataScope(t, this))
    }, this)), s && this.filtered.sort(function (t, e) {
      return t[s] < e[s] ? -1 : t[s] > e[s] ? 1 : 0
    }), "desc" == e && this.filtered.reverse(), this.filtered.length ? this.set("pages", i ? Math.ceil(this.filtered.length / i) : 1) : this.set("pages", 1), this.set("items", this.filtered.length), this.set("sort", {
      on: s,
      dir: e
    }), this.setPage(this.page)
  },
  setData: function (t) {
    if (this.items = [], t && "object" == typeof t)
      if (Array.isArray(t)) this.items = t.map(function (t) {
        return "object" == typeof t ? t : {
          $value: t
        }
      });
      else
        for (var e in t) this.items.push({
          $key: e,
          $value: t[e]
        })
  },
  setPage: function (t) {
    var e = +this.props.pageSize,
      s = this.filtered.slice(0);
    t < 1 && (t = 1), t > this.data.pages && (t = this.data.pages), this.set("page", t), this.set("data", e ? s.splice((t - 1) * e, e) : s), this.set("has", {
      first: 1 < t,
      prev: 1 < t,
      next: t < this.data.pages,
      last: t < this.data.pages
    })
  },
  setPageSize: function (t) {
    this.props.pageSize = Number(t), this.setPage(1)
  }
}), dmx.Component("data-detail", {
  initialData: function () {
    return {
      data: {}
    }
  },
  attributes: {
    data: {
      type: Array,
      default: []
    },
    key: {
      type: String
    },
    value: {
      type: [String, Number]
    }
  },
  methods: {
    select: function (t) {
      this.props.value = t, this.select(t, !0)
    }
  },
  render: function (t) {
    this.items = [], this.$parse(), this.setData(this.props.data), this.select(this.props.value)
  },
  update: function (t) {
    JSON.stringify(t.data) !== JSON.stringify(this.props.data) && (this.setData(this.props.data), this.select(this.props.value)), t.value !== this.props.value && this.select(this.props.value, !0)
  },
  setData: function (t) {
    if (this.items = [], t && "object" == typeof t)
      if (Array.isArray(t)) this.items = t.map(function (t) {
        return "object" == typeof t ? t : {
          $value: t
        }
      });
      else
        for (var e in t) this.items.push({
          $key: e,
          $value: t[e]
        })
  },
  select: function (e, t) {
    var s = this.items.findIndex(function (t) {
      return t[this.props.key] === e
    }, this);
    if (this.set("data", this.items[s] || null), t) {
      var i = this.$node;
      requestAnimationFrame(function () {
        for (var t = i.querySelectorAll("form"), e = 0; e < t.length; e++) t[e].reset()
      })
    }
  }
}), dmx.Component("data-iterator", {
  initialData: function () {
    return {
      index: -1,
      value: null,
      has: {
        first: !1,
        prev: !1,
        next: !1,
        last: !1
      }
    }
  },
  tag: "div",
  attributes: {
    data: {
      type: Array,
      default: []
    },
    index: {
      type: Number,
      default: 0
    },
    loop: {
      type: Boolean,
      default: !1
    }
  },
  methods: {
    first: function () {
      this.first()
    },
    prev: function () {
      this.prev()
    },
    next: function () {
      this.next()
    },
    last: function () {
      this.last()
    },
    random: function () {
      this.random()
    },
    select: function (t) {
      this.select(t)
    }
  },
  render: function (t) {
    this.items = [], dmx.BaseComponent.prototype.render.call(this, t), this.setData(this.props.data), this.select(this.props.index)
  },
  update: function (t) {
    JSON.stringify(t.data) !== JSON.stringify(this.props.data) && (this.setData(this.props.data), this.select(this.props.index)), t.index !== this.props.index && this.select(this.props.index)
  },
  setData: function (t) {
    t && (Array.isArray(t) ? this.items = t : console.warn("Iterator data is not array but a " + typeof t))
  },
  first: function () {
    this.items.length && this.select(0)
  },
  prev: function () {
    this.items.length && (index = this.data.index - 1, index < 0 && this.props.loop && (index = this.items.length - 1), this.select(index))
  },
  next: function () {
    this.items.length && (index = this.data.index + 1, index >= this.items.length && this.props.loop && (index = 0), this.select(index))
  },
  last: function () {
    this.items.length && this.select(this.items.length - 1)
  },
  random: function () {
    this.items.length && this.select(Math.floor(this.items.length * Math.random()))
  },
  select: function (t) {
    if (t = parseInt(t, 10), this.items.length) {
      var e = this.items.length - 1;
      t < 0 && (t = 0), t >= this.items.length && (t = e), this.set("index", t), this.set("value", this.items[t]), this.set("has", {
        first: 0 < t,
        prev: 0 < t,
        next: t < e,
        last: t < e
      })
    } else this.set("index", -1), this.set("value", null), this.set("has", {
      first: !1,
      prev: !1,
      next: !1,
      last: !1
    })
  }
});
//# sourceMappingURL=../maps/dmxDataTraversal.js.map